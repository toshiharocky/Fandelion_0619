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

class BookingController extends Controller
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
        $user_name =  Auth::user()->name;
        
        
        $gym_id = $request->session()->get('gym_id');
        
        $gym_infos = Gym::where('id', $gym_id)->get();
        // dd($gym_infos);
        
        $gym_title = $gym_infos[0]->gym_title;
        
        // ジムのスケジュールを取得する
        $gym_schedule = DB::table('gyms')
                    ->join('gym_schedules', 'gyms.id', '=', 'gym_id')
                    ->select('gym_id','from_time', 'to_time', 'price', 'status', 'day', 'booking_id')
                    ->where('gym_id',$gym_id)
                    ->get();
        $gym_schedule_count = count($gym_schedule);
        
        for($i=0; $i<$gym_schedule_count; $i++){
            $gym_from_times_str = [$gym_schedule[$i]->from_time][0];
            $gym_to_times_str = [$gym_schedule[$i]->to_time][0];
            if([$gym_schedule[$i]->booking_id][0] == ""){
                $gym_status = "○";
                $price = [$gym_schedule[$i]->price][0];
            }else{
                $gym_status = "×";
                $price = "-";
            }
            
            $gym_open_times[] = array('date' => date("m/d/Y", strtotime($gym_from_times_str)), 'from_time' => date("H:i", strtotime($gym_from_times_str))
            , 'to_time' => date("H:i", strtotime($gym_to_times_str)), 'status' => $gym_status,  'price' => $price);
        }
        // dd($gym_open_times[3000]);
        
        
        
        
        return view('booking',[
            'user_name'=>$user_name,
            ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
