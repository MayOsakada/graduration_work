<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Schedulesテーブルとのリレーション
    public function _schedules() {
        return $this->hasMany('App\Schedule');
    }
}
