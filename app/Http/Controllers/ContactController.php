<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
use Mail;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','send']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = array(
        //     'title'=>'Enventzas Contact'
        // );
        // return view('contact.index')->with($data);
        return view('contact.index');
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

    public function send(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $sendTo = Configuration::where([
            'name' => 'feedback_email',
            'section'=> 'CONTACTUS'
        ])->first(['value'])->toArray();
        if(isset($sendTo['value']))
        {
            $sendTo = $sendTo['value'];
            $from = $request['email'];
            Mail::send('emails.contact', ['title' => $request['subject'], 'content' => $request['message']],function($message) use($from, $sendTo) {
                $message->from($from);
                $message->to($sendTo);
                $message->subject("[INBOX] Event.ZAS");
            });
            return redirect('/contact')->with('success', 'Message Sent Successfully!');
        }
        return redirect('/contact')->with('error', 'Message Not Sent.');
    }
}
