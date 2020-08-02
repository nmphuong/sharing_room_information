<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use DB;
use Exception;

class ApprovalController extends Controller
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
                $postCount['postCount'] = ceil(count(DB::select('select * from phong_tro where status = 0')) / 5);
                $post['post'] = DB::select("select phong_tro.*,users.fullname from  `phong_tro`, `users` where `user` in (select id from users) and phong_tro.status = 0 and users.id = user order by day_post desc limit 5 offset " . $offset . ";");
                return view('managers.approval')->with($post)->with($postCount);
            }
            return view('not_found.page_not_found_page');
        }
        return view('not_found.page_not_found_page');
    }
    public function review(Request $request, Response $response)
    {
        //dump($request);
        if(Session::get('session_logged_in')){
            if(Session::get('session_logged_in')->status == 777){
                $posts = DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward and phong_tro.status = 0");
                $post['post'] = DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward and phong_tro.status = 0");
                if(count($posts) == 0){
                    return view('not_found.page_not_found_page');
                }
                return view('managers.review')->with($post);
            }
            return view('not_found.page_not_found_page');
        }
        return view('not_found.page_not_found_page');
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
        if(Session::get('session_logged_in')->status == 777){
            //dump($request->post);
            DB::table('phong_tro')->where('id', $request->post)->update(['status'=>1]);
            return redirect('approval')->with('success', 'Thành công!');
        }
        return view('not_found.page_not_found_page');
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
