<style>
    #content {
        direction: rtl
    }

    button {
        padding: 15px;
        background-color: rgb(150, 231, 43);
        border: 0;
        font-weight: bold;
        font-size: 15px;
        margin-bottom: 10px
    }

    button:hover {
        cursor: pointer;
    }

    #start_week,
    #end_week {
        padding: 15px;
        text-align: center;
        margin-bottom: 10px
    }

    .delete {
        padding: 15px;
        background-color: red;
        border: 0px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        margin-top: 20px;
        width: 150px
    }
</style>
@extends('layouts.general-layout')
@section('content')
    <div id="content">
        <h1>مخطط مرور القائد في الفترة </h1>
        <input type="date" id="start_week" value="{{ $plan->start_plan }}" disabled />
        إلى
        <input type="date" id="end_week" value="{{ $plan->end_plan }}" disabled />
        <br />
        <span> السبت :
            @foreach ($plan->kataeabs as $p)
                @if ($p->day == '1')
                    {{ $p->katepa->katepa_name }},
                @endif
            @endforeach
        </span>
        <br />
        <span> الأحد :
            @foreach ($plan->kataeabs as $p)
                @if ($p->day == '2')
                    {{ $p->katepa->katepa_name }},
                @endif
            @endforeach
        </span>

        <br />
        <span> الأثنين :
            @foreach ($plan->kataeabs as $p)
                @if ($p->day == '3')
                    {{ $p->katepa->katepa_name }},
                @endif
            @endforeach
        </span>

        <br />
        <span> الثلاثاء :
            @foreach ($plan->kataeabs as $p)
                @if ($p->day == '4')
                    {{ $p->katepa->katepa_name }},
                @endif
            @endforeach
        </span>

        <br />
        <span> الأربعاء :
            @foreach ($plan->kataeabs as $p)
                @if ($p->day == '5')
                    {{ $p->katepa->katepa_name }},
                @endif
            @endforeach
        </span>

        <br />
        <span> الخميس :
            @foreach ($plan->kataeabs as $p)
                @if ($p->day == '6')
                    {{ $p->katepa->katepa_name }},
                @endif
            @endforeach
        </span>
        <a href="{{ url('/delete-weekly-traffic/' . $plan->id) }}"> <button class="delete"> حذف </button>
        </a>
    </div>
@stop
