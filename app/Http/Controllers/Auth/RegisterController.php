<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
        if($is_vendor=='enabled')
        {
            $user->assignRole('vendor');
            Vendor::create([
                'user_id' => $newuser->id,
                'companyregno' => $data['companyregno'],
                'address' => $data['address'],
                'country_id' => $data['country'],
                'postalcode' => $data['postalcode'],
                'contactno' => $data['contact'],
                'website' => $data['website'],
            ]);
        }
        else
        {
            $user->assignRole('visitor');
        }
        return $newuser;
    }
}
