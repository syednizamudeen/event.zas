<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
use Auth;
use Session;

class ConfigurationsController extends Controller
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
            'title'=>'Configurations',
            'configurations'=>Configuration::orderBy('name','asc')->paginate(10)
        );
        return view('configuration.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title'=>'Create Configuration'
        );
        return view('configuration.create')->with($data);
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
            'name'=>'required',
            'value'=>'required',
            'section'=>'required'
        ]);
        
        $configuration = new Configuration;
        $configuration->name = $request->input('name');
        $configuration->value = $request->input('value');
        $configuration->section = $request->input('section');
        $configuration->type = $request->input('type');
        $configuration->save();

        return redirect('/configurations')->with('success', 'Configuration Created');
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
            'title'=>'Configuration Details',
            'configuration'=>Configuration::findOrFail($id)
        );
        return view('configuration.show')->with($data);
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
            'title'=>'Edit Configuration',
            'configuration'=>Configuration::findOrFail($id)
        );
        return view('configuration.edit')->with($data);
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
        $this->validate($request,[
            'name'=>'required',
            'value'=>'required',
            'section'=>'required'
        ]);

        $configuration = Configuration::findOrFail($id);
        $configuration->name = $request->input('name');
        $configuration->value = $request->input('value');
        $configuration->section = $request->input('section');
        $configuration->type = $request->input('type');
        $configuration->save();

        return redirect('/configurations')->with('success', 'Service Configuration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $configuration = Configuration::findOrFail($id);
        $configuration->delete();

        return redirect('/configurations')->with('success', 'Configuration Deleted');
    }
}
