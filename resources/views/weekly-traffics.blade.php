<style>
    #content {
        direction: rtl
    }

    .traffic {
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
    .main-page-route{
        margin-bottom: 10px
    }
</style>
@extends('layouts.general-layout')
@section('content')
    <div id="content">
        <div id="intro" style="text-align: center">
            <h1>جميع المخططات لمرورالسيد القائد</h1>
            <a href="{{ url('/') }}">   
                <button class="main-page-route"> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        @foreach ($traffics as $traffic)
            <a href="{{ url('/show-weekly-traffic/' . $traffic->id) }}">
                <button class="traffic">من{{ Numbers::ShowInArabicDigits($traffic->start_plan) }} إلي {{ Numbers::ShowInArabicDigits($traffic->end_plan) }} </button>
            </a>
        @endforeach
    </div>
@stop
