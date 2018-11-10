<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Vendor;
use App\Service;
use App\Plan;
use App\Country;
use App\Type;
use App\Duration;
use App\SocialConnection;
use App\VendorService;

class VendorsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'clearance'], ['except' => ['index', 'register', 'search']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'=>'Vendors',
            'vendors'=>Vendor::orderBy('id','desc')->paginate(10)
        );
        return view('vendors.index')->with($data);
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
        $data = array(
            'title'=>'Edit Vendor',
            'vendor'=>Vendor::findOrFail($id),
            'services'=>array_column(Service::all('id','name')->toArray(), 'name', 'id'),
            'countries'=>array_column(Country::all('id','name')->toArray(), 'name', 'id')
        );
        return view('vendors.edit')->with($data);
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
        $vendor = Vendor::findOrFail($id);
        $vendor->companyregno = $request->input('companyregno');
        $vendor->address = $request->input('address');
        $vendor->country_id = $request->input('country');
        $vendor->postalcode = $request->input('postalcode');
        $vendor->contactno = $request->input('contact');
        $vendor->website = $request->input('website');
        $vendor->save();
        #Update Services
        foreach($request->services as $k=>$v)
        {
            if(!is_null($v))
            {
                $vendorservice = VendorService::where(['vendor_id'=>$id,'service_id'=>$v])->get();
                if($vendorservice->count()==0)
                {
                    VendorService::create([
                        'vendor_id' => $id,
                        'service_id' => $v,
                    ]);
                }                
            }
        }
        #Remove Services
        $vendorservices = VendorService::where(['vendor_id'=>$id])->get();
        foreach($vendorservices as $k=>$v)
        {
            if(!in_array($v['service_id'],$request->services))
            {
                $vendorservice = VendorService::where(['vendor_id'=>$id,'service_id'=>$v['service_id']])->firstOrFail();
                $vendorservice->delete();
            }
        }

        return redirect('/vendors')->with('success', 'Vendor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        #do not allow vendor to be deleted as the user details still need to be delete; so vendor must be deleted from useController
        abort(404, 'The resource you are looking for could not be found');

        // $vendor = Vendor::findOrFail($id);
        // $vendor->delete();

        // return redirect('/vendors')->with('success', 'Vendor Deleted');
    }

    /**
     * Display search page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = array(
            'title'=>'Search Vendors',
            'vendors'=>Vendor::orderBy('id','desc')->paginate(2)
        );
        if($request->ajax())
        {
            return view('vendors.partials.live')->with($data);  
        }
        return view('vendors.search')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        if(Auth::guest())
        {
            $data = array(
                'services'=>array_column(Service::all('id','name')->toArray(), 'name', 'id'),
                'countries'=>array_column(Country::all('id','name')->toArray(), 'name', 'id'),
                'packages'=>Plan::where('type_id', 1)->get(),
                'addons'=>Plan::where('type_id', 2)->get(),
                'socialconnections'=>SocialConnection::orderBy('name')->get()
            );
            return view('vendors.register')->with($data);
        }
        else
        {
            return redirect('/');
        }
    }
}
