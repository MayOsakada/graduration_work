<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    // 参照させたいSQLのテーブル名を指定してあげる
    protected $table = 'talents';
    //Schedulesテーブルとのリレーション
    public function t_schedules() {
        return $this->hasMany('App\Schedule');
    }
}
