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

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // inner joinで写真を呼び出す
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
        
        
        
        // $all = $request->all();
        // $i = $request->start_date;
        // $s = $request->monday_start_time;
        
        // $day = date('N', strtotime($i)); //start_dateの曜日取得
        // $d = $i." ".$s;
        // $d2 = new DateTime($i);
        // // $e = '2021-10-04 15:25:07';
        // $c = date('Y-m-d H:i',strtotime($d));
        
        // // $d2 -> modify("+15 minute");
        
        
        
        // $t = gettype($c);
        // $datatype = gettype($request->longitude);
        // dd($datatype);
        // dd($d2);
        
        // ジム登録情報のバリデーション
        $validator = Validator::make($request->all(), [
            // 'user_id' => 'required|integer',
            // 'gymStatus_id' => 'required|integer',
            'gym_title' => 'required|string|max:255',
            'gym_desc' => 'required|string',
            'cancel_policy_id' => 'required|string',
            'gymType_id' => 'required|integer',
            'zip01' => 'required|string',
            'pref01' => 'required|string',
            'addr01' => 'required|string',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'area' => 'required|integer',
            'guest_gender' => 'required|integer',
            'guest_limit' =>  'required|integer|max:255',
            'images.*' => 'required|file|image|max:2048', 
            'equipment_name.*' => 'required|string',
            'min_weight.*' => 'nullable|numeric',
            'max_weight.*' => 'nullable|numeric',
            'note.*' => 'nullable|string',
        ]);
        
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/add_gym')
                ->withInput()
                ->withErrors($validator);
        }
        // 画像のバリデーション
        // $validator = $request->validate( [
        //     'images.*' => 'required|file|image|max:2048', 
        // ]);
        
        // //バリデーション:エラー
        // if ($validator->fails()) {
        //     return redirect('/search')
        //         ->withInput()
        //         ->withErrors($validator);
        // }
        
        // 画像ファイル取得
        // $file = $request->all();
        $images = $request->file('images');
        // dd($image);
        
        
    
        if ( !empty($images) ) {
    
            // Eloquent モデルでジム情報をgymsテーブルに登録
             $gyms = new Gym;
             $gyms->user_id = $user;
             $gyms->gym_title = $request->gym_title;
             $gyms->gym_desc = $request->gym_desc;
             $gyms->cancel_policy_id = $request->cancel_policy_id;
             $gyms->gymType_id = $request->gymType_id;
             $gyms->zip_code = $request->zip01;
             $gyms->pref = $request->pref01;
             $gyms->addr = $request->addr01;
             $gyms->longitude = $request->longitude;
             $gyms->latitude = $request->latitude;
             $gyms->area = $request->area;
             $gyms->guest_gender = $request->guest_gender;
             $gyms->guest_limit = $request->guest_limit;
             $gyms->save(); 
             $gym_id = $gyms->id;
            //  dd($gyms);
            
            
            $equipment_amount = count($request->equipment_name);
            
            // Eloquentモデルで設備情報をequipmentテーブルに登録
            for($i = 0; $i < $equipment_amount; $i++){
                $equipments = new equipment;
                $equipments->gym_id = $gym_id;
                $equipments->equipment_name = $request->equipment_name[$i];
                $equipments->min_weight = $request->min_weight[$i];
                $equipments->max_weight = $request->max_weight[$i];
                $equipments->note = $request->note[$i];
                $equipments->save();
            }
            
            // dd($image);
            
            foreach($images as $image){
                    
                    
                    // ファイルの拡張子取得
                    $ext = $image->guessExtension();
                    //ファイル名を生成
                    $imgName= Str::random(32).'.'.$ext;
                    
                    // Eloquent モデルで画像情報をgymImagesテーブルに登録
                    $gym_image = new GymImage;
                    $gym_image->gym_id = $gym_id;
                    $gym_image->img_url = $imgName;
                    $gym_image->save();
            
                    //public/uploadフォルダを作成
                    $target_path = public_path('/images/gym_images/');
            
                    //ファイルをpublic/uploadフォルダに移動
                    $image->move($target_path,$imgName);
                    
                    
                    // $image->move('image',$name);
                    // $images[]=$name;
                }
              
              
            //   Elloquentモデルで、start_dateからinitial_duration日間のGymSchedulesテーブルを登録
                $initial_duration = $request->initial_duration;
                $start_date = $request->start_date;
                $monday_start_time = $request->monday_start_time;
                
                $day = date('N', strtotime($start_date)); //start_dateの曜日取得
                $d = $start_date." ".$monday_start_time;
                $start_datetime = new DateTime($start_date);
                $end_datetime = $start_datetime -> modify("+15 minute");
                // $e = '2021-10-04 15:25:07';
                // $start_date_datetime = date('Y-m-d H:i',strtotime($d));
                $start_datetime = new DateTime($start_date);
                // dd($end_datetime);
                
                // $d2 -> modify("+15 minute");
                // $d2 -> modify("+15 minute");
                // $c = strtotime($d);
                
                for($i=0; $i<$initial_duration; $i++){
                    for($j=0; $j<96; $j++){
                        $gym_schedule = new GymSchedule;
                        $gym_schedule->gym_id = $gym_id;
                        if($day<7){
                            $gym_schedule->day = $day;
                        }else{
                            $day = 1;
                            $gym_schedule->day = $day;
                        }
                        $gym_schedule->from_time = $start_datetime;
                        $gym_schedule->to_time = $end_datetime;
                        $gym_schedule->save();
                        $start_datetime -> modify("+15 minute");
                        $end_datetime -> modify("+15 minute");
                    }
                        $day++;
                    
                }
    
        }else{
    
            return redirect('/home');
        }
    
        return redirect('/');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function show(Gym $gym)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function edit(Gym $gym)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gym $gym)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gym $gym)
    {
        //
    }
}
