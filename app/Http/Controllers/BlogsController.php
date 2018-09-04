<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
use Purifier;
use File;
use Illuminate\Support\Facades\Storage;
use URL;

class BlogsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','clearance'], ['except' => ['index','show','update','uploadpicture']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title'=>'Enventzas Blog',
            'posts'=>Blog::orderBy('created_at','desc')->paginate(6)
        );
        return view('blog.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title'=>'Create Post'
        );
        return view('blog.create')->with($data);
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
            'body'=>'required'
        ]);

        $blog = new Blog;
        $blog->name = $request->input('name');
        $blog->body = Purifier::clean($request->input('body'));
        $blog->slug = $request->input('slug');
        $blog->user_id = Auth::user()->id;
        $blog->save();

        return redirect('/blog')->with('success', 'Blog Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $blog = Blog::where('slug', $name)->first();
        if(!$blog) abort(404, 'The resource you are looking for could not be found');
        $data = array(
            'title'=>'Blog Post',
            'blog'=>$blog
        );
        return view('blog.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $data = array(
            'title'=>'Edit Blog',
            'blog'=>$blog
        );
        if($blog->user_id==Auth::user()->id || Auth::user()->hasRole('super-admin')) return view('blog.edit')->with($data);
        else abort('401');
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
            'body'=>'required'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->name = $request->input('name');
        $blog->body = Purifier::clean($request->input('body'));
        $blog->slug = $request->input('slug');
        $blog->save();

        return redirect('/blog')->with('success', 'Blog Post Updated');
    }

    public function uploadpicture(Request $request)
    {
        if($request->hasFile('file'))
        {
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = substr($filename.'_'.time().'_'.rand(99,999).'.'.$extension, -191);
            $path = $request->file('file')->storeAs('public/blog_files', $fileNameToStore);
            $basepath = URL::to('/').'/storage/blog_files/';
        }
        else
        {
            $extension = 'png';
            $fileNameToStore = 'no-image.png';
            $basepath = URL::to('/').'/storage/'.env("MEDIA_UPLOAD_PATH", "user_files/");
        }
        echo json_encode(array('location' => $basepath.$fileNameToStore));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->user_id==Auth::user()->id || Auth::user()->hasRole('super-admin'))
        {
            $blog->delete();

            return redirect('/blog')->with('success', 'Blog Post Deleted');
        }
        abort('401');
    }
}
