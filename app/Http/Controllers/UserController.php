<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Vendor;
use App\UserSocialConnection;
use App\Subscription;
use App\VendorService;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'=>'Users',
            'users'=>User::orderBy('name','asc')->paginate(10)
        );
        return view('users.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);
        $user = User::create($request->only('email', 'name', 'password'));
        $roles = $request['roles'];
        if (isset($roles))
        {
            foreach ($roles as $role)
            {
                $role_r = Role::where('id', '=', $role)->firstOrFail();            
                $user->assignRole($role_r); //Assigning role to user
            }
        }
        return redirect()->route('users.index')->with('flash_message', 'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();
        return view('users.edit', compact('user', 'roles'));
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
        $user = User::findOrFail($id);  
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);
        $input = $request->only(['name', 'email', 'password']);
        $roles = $request['roles'];
        $user->fill($input)->save();
        if (isset($roles))
        {        
            $user->roles()->sync($roles);
        }        
        else
        {
            $user->roles()->detach();
        }
        return redirect()->route('users.index')->with('flash_message', 'User successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id); 
        $roles = $user->roles->pluck('name'); 
        if(in_array('vendor',$roles->toArray()))
        {
            $userid = $user->id;
            $vendor = Vendor::where('user_id', '=' ,$userid)->firstOrFail();
            $vendorid = $vendor->id;
            $vendorservice = VendorService::where('vendor_id', '=' ,$vendorid)->delete();
            $usersocialconnection = UserSocialConnection::where('user_id', '=' ,$userid)->delete();
            $subscription = Subscription::where('vendor_id', '=' ,$vendorid)->delete();
            $vendor->delete();
        }
        $user->delete();
        return redirect()->route('users.index')->with('flash_message', 'User successfully deleted.');
    }
}
