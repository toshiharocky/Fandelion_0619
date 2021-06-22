<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemStatuses extends Model
{
    // Usersテーブルとのリレーション （主テーブル側）
     public function mem_statuses() {
        return $this->hasMany('App\User');
    }
}
