<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
        // 参照させたいSQLのテーブル名を指定してあげる
    protected $table = 'schedules';
    
    //Talentテーブルとのリレーション（スケジュールテーブル（従）からみて
    public function talent() {
        return $this->belongsTo('App\Talent');
    }
    
    //Categoryテーブルとのリレーション
    public function category() {
        return $this->belongsTo('App\Category');
    }
    
}
