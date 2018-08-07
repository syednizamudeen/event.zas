<?php

namespace App\Http\Controllers;

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
            'title'=>'Account'
        );
        return view('settings.account')->with($data);
    }

    public function profile()
    {
        $data = array(
            'title'=>'Profile'
        );
        return view('settings.profile')->with($data);
    }

    public function picture()
    {
        $data = array(
            'title'=>'Upload Picture'
        );
        return view('settings.picture')->with($data);
    }

    public function connection()
    {
        $data = array(
            'title'=>'Social Connection'
        );
        return view('settings.connection')->with($data);
    }

    public function payment()
    {
        $data = array(
            'title'=>'Payment History'
        );
        return view('settings.payment')->with($data);
    }

    public function subscription()
    {
        $data = array(
            'title'=>'Subscription'
        );
        return view('settings.subscription')->with($data);
    }

    public function blocked()
    {
        $data = array(
            'title'=>'Blocked Account'
        );
        return view('settings.blocked')->with($data);
    }

    public function billing()
    {
        $data = array(
            'title'=>'Billing'
        );
        return view('settings.billing')->with($data);
    }

    public function notification()
    {
        $data = array(
            'title'=>'Notification'
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
        abort(404, 'The resource you are looking for could not be found');
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
