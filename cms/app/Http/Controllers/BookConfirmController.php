<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\MemStatus;
use Illuminate\Http\Request;
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加
use App\GymStatus;
use App\Gym;
use App\GymImage;
use App\Equipment;
use App\GymSchedule;
use Illuminate\Support\Str;
use DateTime;

class BookConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // ログインユーザー取得
        $user = Auth::user()->id;
        
        $gym_id = $request->session()->get('gym_id');
        // dd($gym_id);
        
        $gym_infos = Gym::where('id', $gym_id)->get();
        dd($gym_infos);
        
        $all = $request->all();
        // dd($all);
        
        
        
        // return view('booking_confirm',[
        //     'user_name'=>$user_name,
        //     'gym_id' => $gym_id,
        //     'addr' => $addr,
        //     'gym_infos' => $gym_infos,
        //     'gym_title' => $gym_title,
        //     'gym_open_times' => $gym_open_times,
        //     'host_name' => $host_name,
        //     'guest_gender_flg' => $guest_gender_flg,
        //     'guest_gender' => $guest_gender,
        //     'guest_limit' => $guest_limit,
        //     'gym_type' => $gym_type,
        //     'area' => $area,
        //     ]);
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
