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
    public function index(Request $request)
    {
        //
        // inner joinで写真を呼び出す
        $gym_id = $request->gym_id;
        $gym_infos = Gym::where('id', $gym_id)->get();
        $gym_title = $gym_infos[0]->gym_title;
        $host_user_id  = $gym_infos[0]->user_id;
        $cancel_policy_id  = $gym_infos[0]->cancel_policy_id;
        $gymstatus_id  = $gym_infos[0]->gymstatus_id;
        $gym_desc  = $gym_infos[0]->gym_desc;
        $gymType_id  = $gym_infos[0]->gymType_id;
        $addr  = $gym_infos[0]->addr;
        $longitude  = $gym_infos[0]->longitude; //緯度
        $random_lon = rand(-100000, 100000);
        $random_lon_float = $random_lon / 1000000;
        $longitude_privacy = $longitude + $random_lon_float; //表示する緯度
        $latitude  = $gym_infos[0]->latitude; //緯度
        $random_lat = rand(-100000, 100000);
        $random_lat_float = $random_lat / 1000000;
        $area  = $gym_infos[0]->area;
        $latitude_privacy = $latitude + $random_lat_float;//表示する緯度
        $guest_gender  = $gym_infos[0]->guest_gender;
        $superHost_flg  = $gym_infos[0]->superHost_flg;
        $review_amount  = $gym_infos[0]->review_amount;
        $review_average  = $gym_infos[0]->review_average;
        $guest_limit  = $gym_infos[0]->guest_limit;
        $gym_image_url = DB::table('gyms')
                    ->join('gym_images', 'gyms.id', '=', 'gym_id')
                    ->select('img_url')
                    ->where('gym_id',$gym_id)
                    ->get();
        $gym_images_count = count($gym_image_url);
        // dd($gym_image_url[0]->img_url);
        
        $gym_schedule_all = DB::table('gyms')
                    ->join('gym_schedules', 'gyms.id', '=', 'gym_id')
                    ->select('from_time', 'to_time', 'price', 'status', 'day')
                    ->where('gym_id',$gym_id)
                    ->get();
        dd($gym_schedule_all);
        
        
        if (Auth::check()){
            $user = Auth::user()->id;
            // dd($user);
            // $gym_title = Gym::where('user_id',$user)->first()->title;
            // $gym_title = DB::table('gyms')
            //                 ->join('users', 'gyms.user_id', '=', 'users.id')
            //                 // ->select('user_id','email','title', 'gym_desc')
            //                 ->where('user_id', $user)
            //                 ->first()->email;
            // dd($gym_title);
            $user_name =  Auth::user()->name;
            // $user_memstatus_id = Auth::user()->memstatus_id;
            $status_names = DB::table('users')
                                ->join('mem_statuses', 'users.memstatus_id', '=', 'mem_statuses.id')
                                ->select('name', 'status_name')
                                ->get();
            $status_name = $status_names[1]->status_name;
            
            // dd($status_name);
            
            return view('gym_introduction',[
                'user_name'=>$user_name,
                'status_name'=>$status_name,
                'gym_id'=>$gym_id,
                'gym_infos'=>$gym_infos,
                'gym_title' => $gym_title,
                'host_user_id,' => $host_user_id,
                'cancel_policy_id' => $cancel_policy_id,
                'gymstatus_id' => $gymstatus_id,
                'gym_desc' => $gym_desc,
                'gymType_id' => $gymType_id,
                'addr' => $addr,
                'longitude' =>$longitude, //緯度
                'longitude' => $longitude_privacy,
                'latitude' => $latitude, //緯度
                'latitude_privacy' => $latitude_privacy, //表示する緯度
                'area' => $area,
                'guest_gender' => $guest_gender,
                'superHost_flg' => $superHost_flg,
                'review_amount' => $review_amount,
                'review_average' => $review_average,
                'guest_limit' => $guest_limit,
                'gym_image_url' => $gym_image_url,
                'gym_images_count' => $gym_images_count,
                ]);
            } else{
            
            return view('gym_introduction',[
                'gym_id'=>$gym_id,
                'gym_infos'=>$gym_infos,
                'gym_title' => $gym_title,
                'host_user_id,' => $host_user_id,
                'cancel_policy_id' => $cancel_policy_id,
                'gymstatus_id' => $gymstatus_id,
                'gym_desc' => $gym_desc,
                'gymType_id' => $gymType_id,
                'addr' => $addr,
                'longitude' =>$longitude, //緯度
                'longitude' => $longitude_privacy,
                'latitude' => $latitude, //緯度
                'latitude_privacy' => $latitude_privacy, //表示する緯度
                'area' => $area,
                'guest_gender' => $guest_gender,
                'superHost_flg' => $superHost_flg,
                'review_amount' => $review_amount,
                'review_average' => $review_average,
                'guest_limit' => $guest_limit,
                'gym_image_url' => $gym_image_url,
                'gym_images_count' => $gym_images_count,
                ]);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // ログインユーザー取得
        $user = Auth::user()->id;
        
        
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
        
        
        
        $all = $request->all();
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
        // dd($all);
        
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
            'strt01' => 'required|string',
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
             $gyms->strt = $request->strt01;
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
                $start_datetime = date("Y-m-d", strtotime($start_date));
                $end_datetime = date("Y-m-d", strtotime('+'.$initial_duration.'days',strtotime($start_datetime)));
                $day = date('N', strtotime($start_date)); //start_dateの曜日取得
                
                // $monday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->monday_start_time)));
                // $monday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->monday_end_time)));
                // $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->tuesday_start_time)));
                // $tuesday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->tuesday_end_time)));
                // $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->wednesday_start_time)));
                // $wednesday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->wednesday_end_time)));
                // $thursday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->thursday_start_time)));
                // $thursday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->thursday_end_time)));
                // $friday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->friday_start_time)));
                // $friday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->friday_end_time)));
                // $saturday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->saturday_start_time)));
                // $saturday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->saturday_end_time)));
                // $sunday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->sunday_start_time)));
                // $sunday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->sunday_end_time)));
                
                
                switch($day){
                    case 1:
                        $monday_start_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->monday_start_time));
                        $monday_end_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->monday_end_time));
                        $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->tuesday_start_time)));
                        $tuesday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->tuesday_end_time)));
                        $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->wednesday_start_time)));
                        $wednesday_end_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->wednesday_end_time)));
                        $thursday_start_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->thursday_start_time)));
                        $thursday_end_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->thursday_end_time)));
                        $friday_start_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->friday_start_time)));
                        $friday_end_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->friday_end_time)));
                        $saturday_start_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->saturday_start_time)));
                        $saturday_end_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->saturday_end_time)));
                        $sunday_start_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->sunday_start_time)));
                        $sunday_end_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->sunday_end_time)));
                        break;
                        
                        
                    case 2:
                        $tuesday_start_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->tuesday_start_time));
                        $tuesday_end_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->tuesday_end_time));
                        $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->wednesday_start_time)));
                        $wednesday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->wednesday_end_time)));
                        $thursday_start_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->thursday_start_time)));
                        $thursday_end_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->thursday_end_time)));
                        $friday_start_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->friday_start_time)));
                        $friday_end_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->friday_end_time)));
                        $saturday_start_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->saturday_start_time)));
                        $saturday_end_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->saturday_end_time)));
                        $sunday_start_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->sunday_start_time)));
                        $sunday_end_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->sunday_end_time)));
                        $monday_start_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->monday_start_time)));
                        $monday_end_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->monday_end_time)));
                        break;
                        
                    case 3:
                        $wednesday_start_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->wednesday_start_time));
                        $wednesday_end_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->wednesday_end_time));
                        $thursday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->thursday_start_time)));
                        $thursday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->thursday_end_time)));
                        $friday_start_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->friday_start_time)));
                        $friday_end_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->friday_end_time)));
                        $saturday_start_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->saturday_start_time)));
                        $saturday_end_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->saturday_end_time)));
                        $sunday_start_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->sunday_start_time)));
                        $sunday_end_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->sunday_end_time)));
                        $monday_start_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->monday_start_time)));
                        $monday_end_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->monday_end_time)));
                        $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->tuesday_start_time)));
                        $tuesday_end_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->tuesday_end_time)));
                
                        break;
                        
                    case 4:
                        $thursday_start_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->thursday_start_time));
                        $thursday_end_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->thursday_end_time));
                        $friday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->friday_start_time)));
                        $friday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->friday_end_time)));
                        $saturday_start_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->saturday_start_time)));
                        $saturday_end_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->saturday_end_time)));
                        $sunday_start_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->sunday_start_time)));
                        $sunday_end_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->sunday_end_time)));
                        $monday_start_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->monday_start_time)));
                        $monday_end_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->monday_end_time)));
                        $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->tuesday_start_time)));
                        $tuesday_end_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->tuesday_end_time)));
                        $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->wednesday_start_time)));
                        $wednesday_end_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->wednesday_end_time)));
                        break;
                        
                    case 5:
                        $friday_start_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->friday_start_time));
                        $friday_end_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->friday_end_time));
                        $saturday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->saturday_start_time)));
                        $saturday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->saturday_end_time)));
                        $sunday_start_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->sunday_start_time)));
                        $sunday_end_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->sunday_end_time)));
                        $monday_start_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->monday_start_time)));
                        $monday_end_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->monday_end_time)));
                        $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->tuesday_start_time)));
                        $tuesday_end_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->tuesday_end_time)));
                        $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->wednesday_start_time)));
                        $wednesday_end_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->wednesday_end_time)));
                        $thursday_start_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->thursday_start_time)));
                        $thursday_end_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->thursday_end_time)));

                        
                        break;
                        
                    case 6:
                        $saturday_start_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->saturday_start_time));
                        $saturday_end_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->saturday_end_time));
                        $sunday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->sunday_start_time)));
                        $sunday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->sunday_end_time)));
                        $monday_start_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->monday_start_time)));
                        $monday_end_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->monday_end_time)));
                        $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->tuesday_start_time)));
                        $tuesday_end_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->tuesday_end_time)));
                        $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->wednesday_start_time)));
                        $wednesday_end_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->wednesday_end_time)));
                        $thursday_start_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->thursday_start_time)));
                        $thursday_end_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->thursday_end_time)));
                        $friday_start_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->friday_start_time)));
                        $friday_end_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->friday_end_time)));
                        break;
                        
                    case 7:
                        $sunday_start_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->sunday_start_time));
                        $sunday_end_datetime = date("Y-m-d H:i", strtotime($start_date." ".$request->sunday_end_time));
                        $monday_start_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->monday_start_time)));
                        $monday_end_datetime = date("Y-m-d H:i", strtotime('+1 days',strtotime($start_date." ".$request->monday_end_time)));
                        $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->tuesday_start_time)));
                        $tuesday_end_datetime = date("Y-m-d H:i", strtotime('+2 days',strtotime($start_date." ".$request->tuesday_end_time)));
                        $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->wednesday_start_time)));
                        $wednesday_end_datetime = date("Y-m-d H:i", strtotime('+3 days',strtotime($start_date." ".$request->wednesday_end_time)));
                        $thursday_start_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->thursday_start_time)));
                        $thursday_end_datetime = date("Y-m-d H:i", strtotime('+4 days',strtotime($start_date." ".$request->thursday_end_time)));
                        $friday_start_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->friday_start_time)));
                        $friday_end_datetime = date("Y-m-d H:i", strtotime('+5 days',strtotime($start_date." ".$request->friday_end_time)));
                        $saturday_start_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->saturday_start_time)));
                        $saturday_end_datetime = date("Y-m-d H:i", strtotime('+6 days',strtotime($start_date." ".$request->saturday_end_time)));

                        
                        break;
                        
                }
                
                
                
                
                // $datetimes = array(
                // $monday_start_datetime,
                // $monday_end_datetime,
                // $tuesday_start_datetime,
                // $tuesday_end_datetime,
                // $wednesday_start_datetime,
                // $wednesday_end_datetime,
                // $thursday_start_datetime,
                // $thursday_end_datetime,
                // $friday_start_datetime,
                // $friday_end_datetime,
                // $saturday_start_datetime,
                // $saturday_end_datetime,
                // $sunday_start_datetime,
                // $sunday_end_datetime,);
                
                
                $monday_price = $request->monday_price;
                $tuesday_price = $request->tuesday_price;
                $wednesday_price = $request->wednesday_price;
                $thursday_price = $request->thursday_price;
                $friday_price = $request->friday_price;
                $saturday_price = $request->saturday_price;
                $sunday_price = $request->sunday_price;
                
                
                
                // monday
                while($monday_start_datetime<$end_datetime){
                    $monday_from_datetime = $monday_start_datetime;
                    $monday_to_datetime  = date("Y-m-d H:i", strtotime('+15 minute',strtotime($monday_from_datetime)));
                    
                    
                    while($monday_from_datetime < $monday_end_datetime){
                    $gym_schedule = new GymSchedule;
                    $gym_schedule->gym_id = $gym_id;
                    $gym_schedule->from_time = $monday_from_datetime;
                    $gym_schedule->to_time = $monday_to_datetime;
                    $gym_schedule->day = 1;
                    $gym_schedule->status = 1;
                    $gym_schedule->price = $request->monday_price;
                    $gym_schedule->save();
                    $monday_from_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($monday_from_datetime)));
                    $monday_to_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($monday_to_datetime)));
                // }
                }
                    $monday_start_datetime = date("Y-m-d H:i", strtotime('+7 days',strtotime($monday_start_datetime)));
                    $monday_end_datetime  = date("Y-m-d H:i", strtotime('+7 days',strtotime($monday_end_datetime)));
                }
                
                // dd($tuesday_start_datetime<$end_datetime);
                // dd($tuesday_start_datetime);
                // dd($end_datetime);
                        
                
                // tuesday
                while($tuesday_start_datetime<$end_datetime){
                    $tuesday_from_datetime = $tuesday_start_datetime;
                    $tuesday_to_datetime  = date("Y-m-d H:i", strtotime('+15 minute',strtotime($tuesday_from_datetime)));
                    
                    
                    while($tuesday_from_datetime < $tuesday_end_datetime){
                    $gym_schedule = new GymSchedule;
                    $gym_schedule->gym_id = $gym_id;
                    $gym_schedule->from_time = $tuesday_from_datetime;
                    $gym_schedule->to_time = $tuesday_to_datetime;
                    $gym_schedule->day = 2;
                    $gym_schedule->status = 1;
                    $gym_schedule->price = $request->tuesday_price;
                    $gym_schedule->save();
                    $tuesday_from_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($tuesday_from_datetime)));
                    $tuesday_to_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($tuesday_to_datetime)));
                // }
                }
                    $tuesday_start_datetime = date("Y-m-d H:i", strtotime('+7 days',strtotime($tuesday_start_datetime)));
                    $tuesday_end_datetime  = date("Y-m-d H:i", strtotime('+7 days',strtotime($tuesday_end_datetime)));
                }
                            
                
                
                // wednesday
                while($wednesday_start_datetime<$end_datetime){
                    $wednesday_from_datetime = $wednesday_start_datetime;
                    $wednesday_to_datetime  = date("Y-m-d H:i", strtotime('+15 minute',strtotime($wednesday_from_datetime)));
                    
                    
                    while($wednesday_from_datetime < $wednesday_end_datetime){
                    $gym_schedule = new GymSchedule;
                    $gym_schedule->gym_id = $gym_id;
                    $gym_schedule->from_time = $wednesday_from_datetime;
                    $gym_schedule->to_time = $wednesday_to_datetime;
                    $gym_schedule->day = 3;
                    $gym_schedule->status = 1;
                    $gym_schedule->price = $request->wednesday_price;
                    $gym_schedule->save();
                    $wednesday_from_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($wednesday_from_datetime)));
                    $wednesday_to_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($wednesday_to_datetime)));
                // }
                }
                    $wednesday_start_datetime = date("Y-m-d H:i", strtotime('+7 days',strtotime($wednesday_start_datetime)));
                    $wednesday_end_datetime  = date("Y-m-d H:i", strtotime('+7 days',strtotime($wednesday_end_datetime)));
                }
                
                
                
                
                
                // thursday
                while($thursday_start_datetime<$end_datetime){
                    $thursday_from_datetime = $thursday_start_datetime;
                    $thursday_to_datetime  = date("Y-m-d H:i", strtotime('+15 minute',strtotime($thursday_from_datetime)));
                    
                    
                    while($thursday_from_datetime < $thursday_end_datetime){
                    $gym_schedule = new GymSchedule;
                    $gym_schedule->gym_id = $gym_id;
                    $gym_schedule->from_time = $thursday_from_datetime;
                    $gym_schedule->to_time = $thursday_to_datetime;
                    $gym_schedule->day = 4;
                    $gym_schedule->status = 1;
                    $gym_schedule->price = $request->thursday_price;
                    $gym_schedule->save();
                    $thursday_from_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($thursday_from_datetime)));
                    $thursday_to_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($thursday_to_datetime)));
                // }
                }
                    $thursday_start_datetime = date("Y-m-d H:i", strtotime('+7 days',strtotime($thursday_start_datetime)));
                    $thursday_end_datetime  = date("Y-m-d H:i", strtotime('+7 days',strtotime($thursday_end_datetime)));
                }
                
                
                
                // friday
                while($friday_start_datetime<$end_datetime){
                    $friday_from_datetime = $friday_start_datetime;
                    $friday_to_datetime  = date("Y-m-d H:i", strtotime('+15 minute',strtotime($friday_from_datetime)));
                    
                    
                    while($friday_from_datetime < $friday_end_datetime){
                    $gym_schedule = new GymSchedule;
                    $gym_schedule->gym_id = $gym_id;
                    $gym_schedule->from_time = $friday_from_datetime;
                    $gym_schedule->to_time = $friday_to_datetime;
                    $gym_schedule->day = 5;
                    $gym_schedule->status = 1;
                    $gym_schedule->price = $request->friday_price;
                    $gym_schedule->save();
                    $friday_from_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($friday_from_datetime)));
                    $friday_to_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($friday_to_datetime)));
                // }
                }
                    $friday_start_datetime = date("Y-m-d H:i", strtotime('+7 days',strtotime($friday_start_datetime)));
                    $friday_end_datetime  = date("Y-m-d H:i", strtotime('+7 days',strtotime($friday_end_datetime)));
                }
                
                
                
                
                // saturday
                while($saturday_start_datetime<$end_datetime){
                    $saturday_from_datetime = $saturday_start_datetime;
                    $saturday_to_datetime  = date("Y-m-d H:i", strtotime('+15 minute',strtotime($saturday_from_datetime)));
                    
                    
                    while($saturday_from_datetime < $saturday_end_datetime){
                    $gym_schedule = new GymSchedule;
                    $gym_schedule->gym_id = $gym_id;
                    $gym_schedule->from_time = $saturday_from_datetime;
                    $gym_schedule->to_time = $saturday_to_datetime;
                    $gym_schedule->day = 6;
                    $gym_schedule->status = 1;
                    $gym_schedule->price = $request->saturday_price;
                    $gym_schedule->save();
                    $saturday_from_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($saturday_from_datetime)));
                    $saturday_to_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($saturday_to_datetime)));
                // }
                }
                    $saturday_start_datetime = date("Y-m-d H:i", strtotime('+7 days',strtotime($saturday_start_datetime)));
                    $saturday_end_datetime  = date("Y-m-d H:i", strtotime('+7 days',strtotime($saturday_end_datetime)));
                }
                
                
                
                
                // sunday
                while($sunday_start_datetime<$end_datetime){
                    $sunday_from_datetime = $sunday_start_datetime;
                    $sunday_to_datetime  = date("Y-m-d H:i", strtotime('+15 minute',strtotime($sunday_from_datetime)));
                    
                    
                    while($sunday_from_datetime < $sunday_end_datetime){
                    $gym_schedule = new GymSchedule;
                    $gym_schedule->gym_id = $gym_id;
                    $gym_schedule->from_time = $sunday_from_datetime;
                    $gym_schedule->to_time = $sunday_to_datetime;
                    $gym_schedule->day = 7;
                    $gym_schedule->status = 1;
                    $gym_schedule->price = $request->sunday_price;
                    $gym_schedule->save();
                    $sunday_from_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($sunday_from_datetime)));
                    $sunday_to_datetime = date("Y-m-d H:i", strtotime('+15 minute',strtotime($sunday_to_datetime)));
                // }
                }
                    $sunday_start_datetime = date("Y-m-d H:i", strtotime('+7 days',strtotime($sunday_start_datetime)));
                    $sunday_end_datetime  = date("Y-m-d H:i", strtotime('+7 days',strtotime($sunday_end_datetime)));
                }
                
                
                // Monday info
                // if($request->monday_start_time != "Closed"){
                //     // $monday = $start_date." ".$request->monday_start_time;
                //     $monday_start_datetime = $request->monday_start_time;
                //     $monday_start_datetime = new DateTime($start_date." ".$request->monday_start_time);
                //     $monday_end_datetime = new DateTime($request->monday_end_time);
                //     $monday_price = $request->monday_price;
                // }
                
                // // Tuesday info
                // if($request->tuesday_start_time != "Closed"){
                //     $tuesday_start_datetime = new DateTime($request->tuesday_start_time);
                //     $tuesday_end_datetime = new DateTime($request->tuesday_end_time);
                //     $tuesday_price = $request->tuesday_price;
                // }
                
                // // Wednesday info
                // if($request->wednesday_start_time != "Closed"){
                //     $wednesday_start_datetime = new DateTime($request->wednesday_start_time);
                //     $wednesday_end_datetime = new DateTime($request->wednesday_end_time);
                //     
                // }
                
                // // Thursday info
                // if($request->thursday_start_time != "Closed"){
                //     $thursday_start_datetime = new DateTime($request->thursday_start_time);
                //     $thursday_end_datetime = new DateTime($request->thursday_end_time);
                //     
                
                // }
                
                // // Friday info
                // if($request->friday_start_time != "Closed"){
                //     $friday_start_datetime = new DateTime($request->friday_start_time);
                //     $friday_end_datetime = new DateTime($request->friday_end_time);
                //     
                
                // }
                
                // // Saturday info
                // if($request->saturday_start_time != "Closed"){
                //     $saturday_start_datetime = new DateTime($request->saturday_start_time);
                //     $saturday_end_datetime = new DateTime($request->saturday_end_time);
                //     
                
                // }
                
                // // Sunday info
                // if($request->sunday_start_time != "Closed"){
                //     $sunday_start_datetime = new DateTime($request->sunday_start_time);
                //     $sunday_end_datetime = new DateTime($request->sunday_end_time);
                //     
                
                // }
                
                
                
                // $d = $start_date." ".$monday_start_datetime;
                // $start_datetime = new DateTime($d);
                // dd($monday_start_datetime);
                // $end_datetime = $start_datetime -> modify("+15 minute");
                // $e = '2021-10-04 15:25:07';
                // $start_date_datetime = date('Y-m-d H:i',strtotime($d));
                // $start_datetime = new DateTime($start_date);
                // dd($end_datetime);
                
                // $d2 -> modify("+15 minute");
                // $d2 -> modify("+15 minute");
                // $c = strtotime($d);
                
                // 全ての時間帯をstatus0(使用不可)で登録
                // for($i=0; $i<$initial_duration; $i++){
                //     for($j=0; $j<96; $j++){
                //         $gym_schedule = new GymSchedule;
                //         $gym_schedule->gym_id = $gym_id;
                //         if($day<7){
                //             $gym_schedule->day = $day;
                //         }else{
                //             $day = 1;
                //             $gym_schedule->day = $day;
                //         }
                //         $gym_schedule->from_time = $start_datetime;
                //         $gym_schedule->to_time = $end_datetime;
                //         $gym_schedule->save();
                //         $start_datetime -> modify("+15 minute");
                //         $end_datetime -> modify("+15 minute");
                //     }
                //         $day++;
                    
                // }
                
                // 選択した時間帯をstatus1(予約可能)で登録
    
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
