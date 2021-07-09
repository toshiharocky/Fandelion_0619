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
        
        $user_name =  Auth::user()->name;
        
        $gym_id = $request->session()->get('gym_id');
        // dd($gym_id);
        
        $gym_infos = Gym::where('id', $gym_id)->get();
        // dd($gym_infos);
        
        $all = $request->all();
        // dd($all);
        
        $request->session()->put('total_time', $request->total_time);
        $request->session()->put('from_to', $request->from_to);
        $request->session()->put('number_of_users', $request->number_of_users);
        $request->session()->put('number_of_men', $request->number_of_men);
        $request->session()->put('number_of_women', $request->number_of_women);
        $request->session()->put('number_of_others', $request->number_of_others);
        $request->session()->put('gym_price', $request->gym_price);
        $request->session()->put('service_price', $request->service_price);
        $request->session()->put('tax', $request->tax);
        $request->session()->put('total_price', $request->total_price);
        $request->session()->put('slots', $request->slots);
        $request->session()->put('schedule_id', $request->schedule_id);
        // $request->session()->put('', $request->);
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
        $schedule_id = $request->session()->get('schedule_id');
        dd($schedule_id[0]);
        
        // for($i=1; $i>$slots; $i++)
        // {
        //     $request->session()->put('schedule_id_'.$i, $request->schedule_id_.$i);
        //     $schedule_id_.$i = $request->session()->get('schedule_id_'.$i);
        // };
        
        // dd($schedule_id_1);
        
        
//   "schedule_id_1" => "233"
//   "schedule_id_2" => "234"
//   "schedule_id_3" => "235"
//   "from_to" => "14:00 〜 14:45"
//   "number_of_users" => "2"
//   "number_of_men" => "1"
//   "number_of_women" => "1"
//   "number_of_others" => "0"
//   "total_price" => "907"
//   "gym_price" => "750"
//   "service_price" => "75"
//   "tax" => "82"
        
        
        return view('booking_confirm',[
            'user_name'=>$user_name,
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
            ]);
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
