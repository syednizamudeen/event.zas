<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Blog;
use App\Image;
use URL;

class HomeController extends Controller
{
    private $defaultFolder;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
        $this->defaultFolder = env("MEDIA_UPLOAD_PATH", "user_files/");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'=>'Enventzas Home',
            'services'=>array_merge(array(''=>'Category'),array_column(Service::all('id','name')->toArray(), 'name', 'id')),
            'cities'=>array(''=>'City','1'=>'Singapore','2'=>'Johor','3'=>'Kuala Lumpur'),
            'countries'=>array(''=>'Country','1'=>'Singapore','2'=>'Malaysia'),
            'posts'=>Blog::select('id','name','body','slug','user_id','created_at')->orderBy('created_at','desc')->limit(4)->offset(0)->get(),
            'logos'=>Image::where(['image_type_id'=>3])->orderBy('created_at','desc')->limit(8)->offset(0)->get(),
            'logopath'=>URL::to('/').'/storage/'.$this->defaultFolder
        );
        return view('home.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
