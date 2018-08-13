<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Vendor;
use App\UserSocialConnection;
use App\Subscription;
use App\Plan;
use App\Country;
use App\Type;
use App\Duration;
use App\VendorService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $is_vendor = array_key_exists('vendor',$data)?$data['vendor']:'';
        $newuser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        $user = User::find($newuser->id);
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
        Mail::to($user->email)->send(new VerifyMail($user));
        if($is_vendor=='enabled')
        {
            $user->assignRole('vendor');
            $newvendor = Vendor::create([
                'user_id' => $newuser->id,
                'companyregno' => $data['companyregno'],
                'address' => $data['address'],
                'country_id' => $data['country'],
                'postalcode' => $data['postalcode'],
                'contactno' => $data['contact'],
                'website' => $data['website'],
            ]);
            if(array_key_exists('services',$data) && !empty($data['services']) && is_array($data['services']))
            {
                foreach($data['services'] as $k=>$v)
                {
                    if(!is_null($v))
                    {
                        VendorService::create([
                            'vendor_id' => $newvendor->id,
                            'service_id' => $v,
                        ]);
                    }
                }
            }
            if(array_key_exists('socialconnection',$data) && !empty($data['socialconnection']) && is_array($data['socialconnection']))
            {
                foreach($data['socialconnection'] as $k=>$v)
                {
                    if(!is_null($v))
                    {
                        UserSocialConnection::create([
                            'user_id' => $newuser->id,
                            'social_connection_id' => $k,
                            'link' => $v,
                        ]);
                    }
                }
            }
            $plan = Plan::where('id',$data['plan_id'])->first();
            $planperiod = Carbon::now();
            Subscription::create([
                'vendor_id' => $newvendor->id,
                'plan_id' => $data['plan_id'],
                'activationdate' => $planperiod->toDateTimeString(),
                'expirydate' => $planperiod->addDays($plan->duration->noofdays),
            ]);
            if(array_key_exists('addons',$data) && !empty($data['addons']) && is_array($data['addons']))
            {
                foreach($data['addons'] as $k=>$v)
                {
                    if(!is_null($v))
                    {
                        $plan = Plan::where('id',$v)->first();
                        $planperiod = Carbon::now();
                        Subscription::create([
                            'vendor_id' => $newvendor->id,
                            'plan_id' => $v,
                            'activationdate' => $planperiod->toDateTimeString(),
                            'expirydate' => $planperiod->addDays($plan->duration->noofdays),
                        ]);
                    }
                }
            }
            $this->redirectTo = 'dashboard';
            
        }
        else
        {
            $user->assignRole('visitor');
        }
        return $newuser;
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
 
        return redirect('/login')->with('status', $status);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
    }
}
