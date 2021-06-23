<?php

namespace App\Http\Controllers;

use App\MemStatus;
use Illuminate\Http\Request;
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加
use App\GymStatus;
use App\Gym;

class MemStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        if (Auth::check()){
            $user_name =  Auth::user()->name;
            $user_memstatus_id = Auth::user()->memstatus_id;
            $status_name = MemStatus::find($user_memstatus_id)->status_name;
            
            //ここからがテスト
            // $gym_id = Gym::find(3)->gymstatus_id;
            // $gym_status_name = GymStatus::find($gym_id)->status_name;
            // dd($gym_status_name);
            //ここまでがテスト
            // dd($status_name);
            
            return view('search',[
                'user_name'=>$user_name,
                'status_name'=>$status_name,
                // 'gym_status_name'=>$gym_status_name,
                ]);
            } else{
            return view('search');
            }
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
     * @param  \App\MemStatus  $memStatus
     * @return \Illuminate\Http\Response
     */
    public function show(MemStatus $memStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MemStatus  $memStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(MemStatus $memStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MemStatus  $memStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemStatus $memStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MemStatus  $memStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemStatus $memStatus)
    {
        //
    }
}
