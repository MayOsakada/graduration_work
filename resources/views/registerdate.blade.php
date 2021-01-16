<!-- resources/views/registerdate.blade.php -->
@extends('layouts.app')
@push('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush
@section('content')
 <header>
        <!--ナビゲーションメニュー-->
    </header>

    <section>
        <!--トップ画面-->
        <div class="big-bg-result">
            <div class="home-content">
                <h2 class="page-title">{{ $talent->talent_name }}</h2>
            <!--    <div class="seach-box">-->
            <!--        <form method="get" action="#" class="search_container">-->
            <!--            <input type="text" size="25" placeholder="入力値">-->
            <!--            <input type="submit" value="GO">-->
            <!--        </form>-->
            <!--    </div>-->
            </div>

        </div>
    </section>

    <section>
        <div id="registerdate">
            <!--登録フォーム-->
            <h2 class="sub-title">Register</h2>
        	<form method="POST" action="{{ url('registerdate/'.$talent->id) }}" class="register_container">
                日付
                <input type="date" name="date" ></br>
                時間
                <input type="time" name="time" ></br>
                カテゴリー
                <select name="category_id">
                    <option value="">選択してください</option>
                    <option value="1">雑誌</option>
                    <option value="2">TV</option>
                    <option value="3">舞台</option>
                    <option value="4">ライブ</option>
                    <option value="5">試合</option>
                    <option value="6">ラジオ</option>
                    <option value="7">イベント</option>
                    <option value="99">その他</option>
                </select></br>
                <input type="text" name="schedule" placeholder="詳しい予定を入力"></br>
                <input type="text" name="comment" placeholder="リンク等"></br>
                {{ csrf_field() }}
                <button type="submit" class="btn-primary">登録</button>
            </form>
        </div>
    </section>

@endsection
