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
use Illuminate\Support\Str;

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
        
        
        
        // dd($user);
        // dd($request->all());
        
        // ジム登録情報のバリデーション
        $validator = Validator::make($request->all(), [
            // 'user_id' => 'required|integer',
            // 'gymStatus_id' => 'required|integer',
            'gym_title' => 'required|string|max:255',
            'gym_desc' => 'required|string',
            'gymType_id' => 'required|integer',
            'zip01' => 'required|string',
            'pref01' => 'required|string',
            'addr01' => 'required|string',
            'longitude' => 'required|double',
            'latitude' => 'required|double',
            'area' => 'required|integer',
            'guest_gender' => 'required|integer',
            'guest_limit' =>  'required|integer|max:255',
            'images.*' => 'required|file|image|max:2048', 
            // 'superHost_flg' => 'required|integer',
            // 'review_amount' =>  'required|integer|max:255',
            // 'review_average' =>  'required|integer|max:255',
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
             $gyms->gymType_id = $request->gymType_id;
             $gyms->zip_code = $request->zip_code;
             $gyms->pref = $request->pref01;
             $gyms->addr = $request->addr01;
             $gyms->area = $request->area;
             $gyms->guest_gender = $request->guest_gender;
             $gyms->guest_limit = $request->guest_limit;
             $gyms->save(); 
             $gym_id = $gyms->id;
            //  dd($gyms);
             
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
