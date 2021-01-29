<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('home', 'InitialController@index');

//初期遷移時
Route::get('/', 'InitialController@index');

Auth::routes();

//検索ボタン押下後 検索結果表示
Route::post('result','InitialController@result');
//telent_idを送る

//予定登録画面の表示
Route::get('/show_registerform/{talent}','InitialController@show_registerform');

//予定の登録後予定表示画面へ遷移
Route::post('/registerdate/{talent}','InitialController@registerdate');

//タレントごとの予定表示画面
Route::get('/schedule/{talent}','InitialController@schedule');


