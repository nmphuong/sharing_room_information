<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //1595609914000
        if(Session::get('session_logged_in')){
            if(Session::get('session_logged_in')->status == 777){
                $stringUser = '';
                $time = 0;
                $now = time() * 1000;
                if($request->time != -1 && $request->time != null){
                    $time = $request->time * 24 * 60 * 60;
                }
                $before = (time() - $time) * 1000;


                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $timeZone = date("Y-m-d H:i:s");
                $dateReal = date_create();
                if($request->time == -1 && $request->time == null){
                    $request->time = -1;
                }
                $days_p = "-". $time ." days";
                date_modify($dateReal, $days_p);

                $query = '';
                if($request->time != -1 && $request->time != null){
                    $query =  "and created_at between '" . date_format($dateReal, "Y-m-d H:i:s") . "' and '" . $timeZone . "'";
                }
                if($request->time == -1){
                    $query = '';
                }

                // $query = "select * from `phong_tro` where type = 1 " . $motelR;
                // $u = DB::select("select * from `phong_tro` where type = 1 " . $motelR);
                // dump($query);
                // dump($u);


                if($request->time != -1 && $request->time != null){
                    $time = $request->time * 24 * 60 * 60;
                    $stringUser = 'where register between ' .$before. ' and ' .$now ;
                }
                if($request->time == -1){
                    $stringUser = '';
                }

                $user = DB::select('select * from `users` ' . $stringUser);
                $motel = DB::select('select * from `phong_tro` where type = 1 '.$query);
                $apart = DB::select('select * from `phong_tro` where type = 2 '.$query);
                $hou = DB::select('select * from `phong_tro` where type = 3 '.$query);
                $othe = DB::select('select * from `phong_tro` where type = 4 '.$query);

                $users['users'] = count($user);
                $motelRoom['motelRoom'] = count($motel);
                $apartment['apartment'] = count($apart);
                $house['house'] = count($hou);
                $other['other'] = count($othe);

                $result['result'] = $request->time;

                return view('managers.reportpage')->with($users)->with($motelRoom)->with($apartment)->with($house)->with($other)->with($result);
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
