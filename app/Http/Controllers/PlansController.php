<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Country;
use App\Type;
use App\Duration;
use Auth;
use Session;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'=>'Plan',
            'plans'=>Plan::orderBy('name','asc')->paginate(10)
        );
        return view('plan.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title'=>'Create Plan',
            'countries'=>array_column(Country::all('id','currencycode')->toArray(), 'currencycode', 'id'),
            'types'=>array_column(Type::all('id','name')->toArray(), 'name', 'id'),
            'durations'=>array_column(Duration::all('id','name')->toArray(), 'name', 'id')
        );
        return view('plan.create')->with($data);
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
            'name'=>'required|unique:plans,name'
        ]);

        $plan = new Plan;
        $plan->name = $request->input('name');
        $plan->amount = $request->input('amount');
        $plan->country_id = $request->input('country_id');
        $plan->type_id = $request->input('type_id');
        $plan->duration_id = $request->input('duration_id');
        $plan->expire_at = $request->input('expire_at');
        $plan->save();

        return redirect('/plans')->with('success', 'Plan Created');
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
            'title'=>'Plan Details',
            'plan'=>Plan::findOrFail($id)
        );
        return view('plan.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'title'=>'Edit Plan',
            'countries'=>array_column(Country::all('id','currencycode')->toArray(), 'currencycode', 'id'),
            'types'=>array_column(Type::all('id','name')->toArray(), 'name', 'id'),
            'durations'=>array_column(Duration::all('id','name')->toArray(), 'name', 'id'),
            'plan'=>Plan::findOrFail($id)
        );
        return view('plan.edit')->with($data);
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
        $plan = Plan::findOrFail($id);
        $plan->name = $request->input('name');
        $plan->amount = $request->input('amount');
        $plan->country_id = $request->input('country_id');
        $plan->type_id = $request->input('type_id');
        $plan->duration_id = $request->input('duration_id');
        $plan->expire_at = $request->input('expire_at');
        $plan->save();

        return redirect('/plans')->with('success', 'Plan Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();

        return redirect('/plans')->with('success', 'Plan Deleted');
    }
}
