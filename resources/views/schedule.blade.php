<!-- resources/views/schedule.blade.php -->
@extends('layouts.app')
@push('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/fullcalendar-5.5.0')}}"></script>
@endpush
@section('content')
    // <script>
    //   document.addEventListener('DOMContentLoaded', function() {
    //     // DOMを取得
    //     var calendarEl = document.getElementById('calendar');
    
    //     // 指定DOMにカレンダープラグインを適用する
    //     var calendar = new FullCalendar.Calendar(calendarEl, {
    //       plugins: [ 'dayGrid' ]
    //     });
    //     calendar.render();
    //   });
    // </script>
    
    <header>
        <!--ナビゲーションメニュー-->
    </header>

    <section>
        <!--トップ画面-->
        <!--<div class="big-bg-schedule">-->
        <!--    <div class="home-content">-->
        <!--        <h2 class="page-title">Schedule</h2>-->
        <!--    </div>-->
        <!--</div>-->
    </section>
    <section>
        <h2 class="sub-title">{{ $talent->talent_name }}</h2>
        <div class="card" style="width: 100%;">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
            <div class="card-body">
            <p class="card-text">主張したいこと</p>
            </div>
            <div class="overflow-div">
                <ul class="list-group list-group-flush">
                     <!--<div id='calendar'></div>-->
                    @foreach ($schedules as $schedules)
                        <details>
                            <summary><li class="list-group-item">{{ $schedules->date }} {{ $schedules->time }} {{ $schedules->schedule }}</li></summary>
                            詳細な情報と投稿日{{$schedules->comment}} {{$schedules->created_at}}
                        </details>
                         {{ csrf_field() }}
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    
    <section>
            <!--登録画面への遷移-->
            <h2 class="sub-title">Register</h2>
        	<form method="GET" action="{{ url('show_registerform/'.$talent->id) }}">
                <button type="submit" class="btn-primary">登録</button>
                {{ csrf_field() }}
            </form>
    </section>

@endsection
