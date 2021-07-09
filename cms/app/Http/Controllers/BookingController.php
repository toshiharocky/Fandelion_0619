<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\MemStatus;
use Illuminate\Http\Request;
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加
use App\GymStatus;
use App\Booking;
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
        // ログインユーザー取得
        $user = Auth::user()->id;
        
        $user_name =  Auth::user()->name;
        
        $gym_id = $request->session()->get('gym_id');
        
        // $request->session()->put('total_time', $request->total_time);
        // $request->session()->put('from_to', $request->from_to);
        // $request->session()->put('number_of_users', $request->number_of_users);
        // $request->session()->put('number_of_men', $request->number_of_men);
        // $request->session()->put('number_of_women', $request->number_of_women);
        // $request->session()->put('number_of_others', $request->number_of_others);
        // $request->session()->put('gym_price', $request->gym_price);
        // $request->session()->put('service_price', $request->service_price);
        // $request->session()->put('tax', $request->tax);
        // $request->session()->put('total_price', $request->total_price);
        // $request->session()->put('slots', $request->slots);
        // $request->session()->put('schedule_ids', $request->schedule_ids);
        // $request->session()->put('booking_from_time', $request->booking_from_time);
        // $request->session()->put('booking_from_time', $booking_from_time);
        // $request->session()->put('booking_to_time', $booking_to_time);
        $total_time = $request->session()->get('total_time');
        $from_to = $request->session()->get('from_to');
        $number_of_users = $request->session()->get('number_of_users');
        $number_of_men = $request->session()->get('number_of_men');
        $number_of_women = $request->session()->get('number_of_women');
        $number_of_others = $request->session()->get('number_of_others');
        $total_price = $request->session()->get('total_price');
        $gym_price = $request->session()->get('gym_price');
        $service_price = $request->session()->get('service_price');
        $tax = $request->session()->get('tax');
        $slots = $request->session()->get('slots');
        $schedule_ids = $request->session()->get('schedule_ids');
        $date = $request->session()->get('date');
        $booking_from_time = $request->session()->get('booking_from_time');
        $booking_to_time = $request->session()->get('booking_to_time');
        // dd($booking_from_time);
        // dd($schedule_ids);   
        
        $from_time = date("Y-m-d H:i", strtotime($date." ".$booking_from_time));
        $to_time = date("Y-m-d H:i", strtotime($date." ".$booking_to_time));
        // dd($from_time);
        
        // Bookingテーブルに作成
        $booking = new Booking;
        $booking->user_id  = $user;
        $booking->gym_id  = $gym_id;
        $booking->booking_from_time  = $from_time;
        $booking->booking_to_time  = $to_time;
        $booking->number_of_users  = $number_of_users;
        $booking->number_of_men  = $number_of_men;
        $booking->number_of_women  = $number_of_women;
        $booking->number_of_others  = $number_of_others;
        $booking->total_price  = $total_price;
        $booking->gym_price  = $gym_price;
        $booking->service_price  = $service_price;
        $booking->tax  = $tax;
        $booking->save(); 
        $booking_id = $booking->id;
        
        // それぞれのGym Scheduleテーブルを更新
        $schedule_id = count($schedule_ids);
        
        for($i = 0; $i < $schedule_id; $i++){
            
                $schedule_id_int = (int)$schedule_ids[$i];
                $gym_schedule = GymSchedule::find($schedule_ids[$i]);
                $gym_schedule->booking_id = $booking_id;
                $gym_schedule->price = $total_price;
                $gym_schedule->status = 2;
                $gym_schedule->save();
            }
        
        return view('booking_completed',[
                'user_name'=>$user_name,]
                );
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
