<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('contact');
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
        // dump("insert into contact(fullname, email, title, content) VALUES ('" . $request->fullname . "', '" . $request->email . "', '" . $request->subject . "', '" . $request->message . "')");
        // $addContact = DB::insert("insert into contact(fullname, email, title, content) values (" . $request->fullname . ", " . $request->email . ", " . $request->subject . ", " . $request->message . ")");
        $contact = new Contact; 
        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->title = $request->subject;
        $contact->content = $request->message;
        $contact->status = 0;
        $contact->save();

        $input = strtolower($request->email);
        $data = array('emailto'=>$input);
        Mail::send(['html'=>'templateEmail.templateEmailThanksContact'],$data, function($message) use ($data){
            foreach($data as $d)
            $message->to($d, '')->subject('Cám ơn bạn đã gửi phản hồi');
            
            $message->from('noreply.sharingroom@gmail.com', "noreply.sharingroom@gmail.com");
        });
        return redirect()->back()->with('success', 'Gửi phản hồi thành công!');;
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
