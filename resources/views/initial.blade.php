<!-- resources/views/initial.blade.php -->
@extends('layouts.app')
@push('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush
@section('content')
    <header>
        <!--ナビゲーションメニュー-->
    </header>
    <section>
        <!--画像big-bgとHPタイトルhome-content-->
        <div class="big-bg-top">
            <div class="home-content">
                <h2 class="page-title">Talents Schedule</h2>
                <p>タレントのお仕事スケジュールをチェックしよう</p>
                <!--検索ボックス-->
                <div class="seach-box">
                    <form method="POST" action="{{ url('result') }}" class="search_container">
                      <input type="text" name="talent_name_s" size="25" placeholder="タレントを検索">
                      <input type="submit" value="GO">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!--おきにいり-->
        <!--ログインしている場合お気に入りを表示する-->
        @if( Auth::check() )
            <div id="favorite">
                <h2 class=sub-title>Favorite</h2>
                    <!--おに入り登録が無い場合、メッセージ表示-->
            </div>
        @endif
        <div class="recent">
            <h2 class=sub-title>最近表示されたタレント</h2>
            @foreach ($talents as $talents)
                    <!--<div class="card" style="width: 100%;">-->
                    <!--  <div class="card-body">-->
                    <!--    <a href="{{ url('schedule/'.$talents->id) }}">-->
                    <!--        <h5 class="card-title">{{ $talents->talent_name }}</h5>-->
                    <!--    </a>-->
                    <!--  </div>-->
                    <!--</div>-->
                <div class="c-link-group">
                    <div class="c-link">
                        <a href="{{ url('schedule/'.$talents->id) }}">
                            <img src="img/pic_top.jpg" alt="">
                            <p>{{ $talents->talent_name }}</p>
                        </a>
                    {{ csrf_field() }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
