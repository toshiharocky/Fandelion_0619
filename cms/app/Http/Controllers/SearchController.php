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

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd($request->all());
        
        $city2 = $request->city2;
        $cityLat = $request->cityLat;
        $cityLng = $request->cityLng;
        $men = $request->men;
        $women = $request->women;
        $total_guest = $request->total_guest;
        $others = $request->others;
        
        $latitude_from = $cityLat - 0.1;
        $latitude_to = $cityLat + 0.1;
        $longitude_from = $cityLng  - 0.1;
        $longitude_to = $cityLng  + 0.1;
        
        // dd($latitude_to);
        
        
        
        
        // $menあり、$womenなし⇨guest_genderは1,3,5
        // $menあり、$womenあり⇨guest_genderは1,4,5
        // $menなし、$womenあり⇨guest_genderは1,2,4
        // $menなし、$womenなし⇨guest_genderはすべて
        if($men != 0){
            if($women == 0){
                $guest_gender = [1, 3, 5];
            }else{
                $guest_gender = [1, 4, 5];
            }
        }else if($women != 0){
                $guest_gender = [1, 2, 4];
            }else{
                $guest_gender = [1, 2, 3, 4, 5];
            }
        
        // dd($guest_gender);
        
        // LatitudeとLongitudeがcityLatとcityLngの±0.1した範囲内にあるジムをピックアップする
        // 定員がtotal_guest以下のジムをピックアップする
        $gyms = Gym::where('guest_limit', '>=', $total_guest)
            ->whereIn('guest_gender',$guest_gender)
            ->where('latitude', '>', $latitude_from)
            ->where('latitude', '<', $latitude_to)
            ->where('longitude', '>', $longitude_from)
            ->where('longitude', '<', $longitude_to)
            ->get();
            
        
        foreach($gyms as $gym){
                $gym_id[] = $gym->id;
                $gym_titles[] = $gym->gym_title;
                $gym_addr[] = $gym->addr;
                $review_average[] = $gym->review_average;
                $gym_image_url[] = DB::table('gyms')
                            ->join('gym_images', 'gyms.id', '=', 'gym_id')
                            ->select('img_url')
                            ->where('gym_id',$gym->id)
                            ->get()[0]->img_url;
                // ジムのスケジュールを取得する
                $gym_schedule = DB::table('gyms')
                            ->join('gym_schedules', 'gyms.id', '=', 'gym_id')
                            ->select('gym_id','from_time', 'to_time', 'price', 'status', 'day', 'booking_id')
                            ->where('gym_id',$gym->id)
                            ->get();
                // ジムの最低価格と最高価格を取得する
                $max_price = $gym_schedule   -> max('price');
                $min_price = $gym_schedule -> min('price');
                
                //画面上に表示する価格レンジを定義する 
                if($max_price == $min_price){
                    $price_range[] = $min_price . "円";
                } else {
                    $price_range[] = $min_price . "円〜" . $max_price. "円";
                }
                
            }
        
        // dd(count($gym_id));
        dd($gym_titles);
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
