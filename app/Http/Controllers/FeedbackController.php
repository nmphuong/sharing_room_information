<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use DB;
use Mail;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Session::get('session_logged_in')){
            if(Session::get('session_logged_in')->status == 777){
                $offset = 0;
                if($request->page != null){
                    $offset = (int)(($request->page - 1) * 5);
                }
                $postCount['postCount'] = ceil(count(DB::select('select * from contact')) / 5);
                $post['post'] = DB::select("select * from  `contact` order by created_at desc limit 5 offset " . $offset . ";");
                return view('managers.feedback')->with($post)->with($postCount);
            }
            return view('not_found.page_not_found_page');
        }
        return view('not_found.page_not_found_page');
    }

    public function review(Request $request, Response $response)
    {
        if(Session::get('session_logged_in')){
            if(Session::get('session_logged_in')->status == 777){
                $posts = DB::select("select * from  `contact` where id = " . $request->post);
                $post['post'] = DB::select("select * from  `contact` where id = " . $request->post);
                if(count($posts) == 0){
                    return view('not_found.page_not_found_page');
                }
                return view('managers.reviewfb')->with($post);
            }
            return view('not_found.page_not_found_page');
        }
        return view('not_found.page_not_found_page');
    }

    public function answer(Request $request){
        // $data = array('message'=>$request->message);
        // $mail = array('emailto'=>$request->email);
        $input = strtolower($request->email);
        $mess = $request->message;
        $data = array('emailto'=>$input);
        $mess = array('mess'=>$mess);
        Mail::send(['html'=>'templateEmail.templateAnswerFeedback'],$mess, function($message) use ($data,$mess){
            foreach($data as $d)
            $message->to($d, '')->subject('Cám ơn bạn đã gửi phản hồi');
            
            $message->from('noreply.sharingroom@gmail.com', "noreply.sharingroom@gmail.com");
        });
        DB::table('contact')->where('id', $request->id)->update(['status' => 1]);
        return redirect('/feedback')->with('success', 'Gửi phản hồi thành công!');;
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
