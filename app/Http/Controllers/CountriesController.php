<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Auth;
use Session;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'=>'Countries',
            'countries'=>Country::orderBy('name','asc')->paginate(10)
        );
        return view('country.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title'=>'Create Country'
        );
        return view('country.create')->with($data);
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
            'name'=>'required|unique:countries,name'
        ]);

        $country = new Country;
        $country->name = $request->input('name');
        $country->iso = $request->input('iso');
        $country->currencycode = $request->input('currencycode');
        $country->currencyname = $request->input('currencyname');
        $country->currencysymbol = $request->input('currencysymbol');
        $country->taxname = $request->input('taxname');
        $country->taxcode = $request->input('taxcode');
        $country->taxrate = $request->input('taxrate');
        $country->countrycode = $request->input('countrycode');
        $country->save();

        return redirect('/countries')->with('success', 'Country Created');
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
            'title'=>'Country Details',
            'country'=>Country::findOrFail($id)
        );
        return view('country.show')->with($data);
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
            'title'=>'Edit Country',
            'country'=>Country::findOrFail($id)
        );
        return view('country.edit')->with($data);
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
        $country = Country::findOrFail($id);
        $country->name = $request->input('name');
        $country->iso = $request->input('iso');
        $country->currencycode = $request->input('currencycode');
        $country->currencyname = $request->input('currencyname');
        $country->currencysymbol = $request->input('currencysymbol');
        $country->taxname = $request->input('taxname');
        $country->taxcode = $request->input('taxcode');
        $country->taxrate = $request->input('taxrate');
        $country->countrycode = $request->input('countrycode');
        $country->save();

        return redirect('/countries')->with('success', 'Country Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect('/countries')->with('success', 'Country Deleted');
    }
}
