<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\SocialConnection;
use App\UserSocialConnection;
use App\ImageType;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('settings/account');
    }

    public function account()
    {
        $data = array(
            'title'=>'Account',
            'user'=>User::findOrFail(Auth::user()->id)
        );
        return view('settings.account')->with($data);
    }

    public function profile()
    {
        $data = array(
            'title'=>'Profile',
            'user'=>User::findOrFail(Auth::user()->id)
        );
        return view('settings.profile')->with($data);
    }

    public function picture()
    {
        $data = array(
            'title'=>'Upload Picture',
            'user'=>User::findOrFail(Auth::user()->id),
            'imagetypes'=>ImageType::orderBy('name')->get()
        );
        return view('settings.picture')->with($data);
    }

    public function connection()
    {
        $socialArray = array();
        foreach(SocialConnection::orderBy('name')->get() as $k => $v)
        {
            $socialArray[$k] = $v;
            $socailLinkArray = UserSocialConnection::where(['user_id'=>Auth::user()->id,'social_connection_id'=>$v->id])->get();
            if($socailLinkArray->count()>0)  $socialArray[$k] = array_merge($v->toArray(),array('link'=>$socailLinkArray->toArray()[0]));
        }        
        $data = array(
            'title'=>'Social Connection',
            'user'=>User::findOrFail(Auth::user()->id),
            'socialconnections'=>$socialArray
        );        
        return view('settings.connection')->with($data);
    }

    public function payment()
    {
        $data = array(
            'title'=>'Payment History',
            'user'=>User::findOrFail(Auth::user()->id)
        );
        return view('settings.payment')->with($data);
    }

    public function subscription()
    {
        $data = array(
            'title'=>'Subscription',
            'user'=>User::findOrFail(Auth::user()->id)
        );
        return view('settings.subscription')->with($data);
    }

    public function blocked()
    {
        $data = array(
            'title'=>'Blocked Account',
            'user'=>User::findOrFail(Auth::user()->id)
        );
        return view('settings.blocked')->with($data);
    }

    public function billing()
    {
        $data = array(
            'title'=>'Billing',
            'user'=>User::findOrFail(Auth::user()->id)
        );
        return view('settings.billing')->with($data);
    }

    public function notification()
    {
        $data = array(
            'title'=>'Notification',
            'user'=>User::findOrFail(Auth::user()->id)
        );
        return view('settings.notification')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        switch ($request['updatesetting']) {
            case 'account':
                return $this->updateAccount($request, $id);
            break;
            case 'connection':
                return $this->updateConnection($request, $id);
            break;
        }
    }

    private function updateAccount(Request $request, $id)
    {
        $user = User::findOrFail($id);  
        $this->validate($request, [
            'name'=>'required|max:120',
            // 'email'=>'required|email|unique:users,email,'.$id,
            // 'password'=>'required|min:6|confirmed'
        ]);
        $input = $request->only(['name']);
        $user->fill($input)->save();
        return redirect()->route('settings.index')->with('flash_message', 'Account'. $user->name.' updated!');
    }

    private function updateConnection(Request $request, $id)
    {
        foreach($request->socialconnection as $k=>$v)
        {
            if(!is_null($v) && !is_null($request['socialconnection_hidden'][$k]))
            {
                $usersocialconnection = UserSocialConnection::findOrFail($request['socialconnection_hidden'][$k]);
                $usersocialconnection->link = $v;
                $usersocialconnection->save();                        
            }
            else
            {
                if(!is_null($v))
                {
                    UserSocialConnection::create([
                        'user_id' => Auth::user()->id,
                        'social_connection_id' => $k,
                        'link' => $v,
                    ]);
                }
            }
        }
        return redirect()->route('settings.index')->with('flash_message', 'Social Connection updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404, 'The resource you are looking for could not be found');
    }
}
