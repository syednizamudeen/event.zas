<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use Auth;
use Session;

class SubscriptionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'clearance']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'=>'Subscriptions',
            'subscriptions'=>Subscription::orderBy('expirydate','asc')->paginate(10)
        );
        return view('subscription.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title'=>'Create Subscription'
        );
        return view('subscription.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:subscriptions,name'
        ]);

        $subscription = new Subscription;
        $subscription->name = $request->input('name');
        $subscription->amount = $request->input('amount');
        $subscription->save();

        return redirect('/subscriptions')->with('success', 'Subscription Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'title'=>'Subscription Details',
            'subscription'=>Subscription::findOrFail($id)
        );
        return view('subscription.show')->with($data);
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
        // $data = array(
        //     'title'=>'Edit Subscription',
        //     'subscription'=>Subscription::findOrFail($id)
        // );
        // return view('subscription.edit')->with($data);
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
        // $subscription = Subscription::findOrFail($id);
        // $subscription->name = $request->input('name');
        // $subscription->amount = $request->input('amount');
        // $subscription->save();

        // return redirect('/subscriptions')->with('success', 'Subscription Updated');
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
        // $subscription = Subscription::findOrFail($id);
        // $subscription->delete();

        // return redirect('/subscriptions')->with('success', 'Subscription Deleted');
    }
}
