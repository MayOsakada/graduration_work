<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talent;//この行を上に追加
use App\User;//この行を上に追加
use App\Category; //この行を上に追加
use App\Schedule;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加
use Carbon\Carbon;//日付取得用

class InitialController extends Controller
{
    
    public function index(){
        
        // return view('initial');
        // 全ての投稿を取得
        $talents = \App\Talent::orderBy('talent_name_s','asc')->get();
        //初期画面の表示
        return view('initial',['talents'=> $talents
        ]);//変数talentsに＄talentsの情報を入れてinitial.phpに渡す
    }
    
    //検索結果を表示する
    public function result(Request $request){
        
        // //バリデーション 
        // $validator = Validator::make($request->all(), [
        //     'team_name' => 'required|max:255',
        // ]);
        // //バリデーション:エラー
        // if ($validator->fails()) {
        //     return redirect('/')
        //         ->withInput()
        //         ->withErrors($validator);
        // }
        $talent = new Talent;
        //テーブルより情報を取得
        $talent = \App\Talent::where('talent_name_s','LIKE',"%$request->talent_name_s%")->get();
                //->orWhere('talent_name', 'LIKE'"%$request->talent_name_s%",)->get();
        //検索結果に遷移
        // return view('result', ['talent' => $talent
        // ]);
        
        $search_txt = $request->talent_name_s;
        return view('result', compact('talent', 'search_txt'));        
    }
    
    //スケジュールを表示
    public function schedule(Talent $talent){
        $schedules = new Schedule;
        //$talent = new Talent; いらない
        //スケジュールを一覧表示
        $schedules = \App\Schedule::where('talent_id',$talent->id)->get();
        return view('schedule', compact('talent', 'schedules'));
    }
    
    //登録画面を表示
    public function show_registerform(Talent $talent){
        return view('registerdate',['talent'=> $talent
        ]);
    }
    
    //予定を登録
    public function registerdate(Request $request, Talent $talent){
        
        // Eloquent モデル
        $schedules = new Schedule;
        $schedules->talent_id = $talent->id;
        $schedules->date = $request->date;
        $schedules->time = $request->time;
        $schedules->schedule = $request->schedule;
        $schedules->category_id = $request->category_id;
        $schedules->comment = $request->comment;
        $schedules->created_at = Carbon::now();
        $schedules->updated_at = Carbon::now();
        $schedules->save(); 
        return view('schedule',['talent'=> $talent
        ]);
    }
    
}

