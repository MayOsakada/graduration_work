<!-- resources/views/result.blade.php -->
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
                <h2 class="page-title">Schedule</h2>
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
        <div id="result">
            <!--検索結果を表示する-->
            <h2 class="sub-title">Result</h2>
                <!--検索ボックス-->
                <div class="seach-box">
                    <form method="get" action="{{ url('result') }}" class="search_container">
                        <input type="text" size="25" placeholder={{$search_txt}}>
                        <input type="submit" value="GO">
                    </form>
                </div>
            @foreach ($talent as $talent)
                <!--<form method="POST" action="" class="talents_container">-->
                    <div><a class="talent-card" href="{{ url('schedule/'.$talent->id) }}">{{ $talent->talent_name }}</a></div>
                <!--    {{ csrf_field() }}-->
                <!--</form>-->
            @endforeach
        </div>
        <div>
            結果にいない場合はこちら
            問い合わせフォームボタン
        </div>
    </section>

@endsection
