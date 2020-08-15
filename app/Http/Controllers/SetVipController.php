<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use DB;

class SetVipController extends Controller
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
                $userCount['userCount'] = ceil(count(DB::select('select * from users where status = 1')) / 5);
                $user['user'] = DB::select("select * from  `users` where status = 1 order by register desc limit 5 offset " . $offset . ";");
                return view('managers.setvip')->with($user)->with($userCount);
            }
            return view('not_found.page_not_found_page');
        }
        return view('not_found.page_not_found_page');
    }

    public function uptovip(Request $request){
        if(Session::get('session_logged_in')->status == 777){
            //dump($request->post);
            DB::table('users')->where('id', $request->id)->update(['vip'=>1]);
            return redirect('set-vip')->with('success', 'Nâng cấp VIP thành công!');
        }
        return view('not_found.page_not_found_page');
    }

    public function destroyvip(Request $request){
        if(Session::get('session_logged_in')->status == 777){
            //dump($request->post);
            DB::table('users')->where('id', $request->id)->update(['vip'=>0]);
            return redirect('set-vip')->with('success', 'Xóa VIP thành công!');
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
