<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    // GymmStatusesテーブルとのリレーション （従テーブル側）
     public function user() {
        return $this->belongsTo('App\GymStatus');
    }
    
     // Userテーブルとのリレーション （従テーブル側）
     public function user_gym() {
        return $this->belongsTo('App\User');
    }
}
