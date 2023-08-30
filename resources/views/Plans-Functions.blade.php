<style>
    .function-button {
        height: 50px;
        border-radius: 10%;
        /* border: 1px solid black; */
        border: 0;
        padding: 15px;
        margin: 10px;
        background-color: rgb(52, 214, 19);
        font-size: 20px;
        font-weight: bold;
    }

    .function-button:hover {
        cursor: pointer;
        background-color: rgb(64, 224, 190);
        border-radius: 20%;
    }
</style>
@extends('layouts.general-layout')
@section('content')
    <div class="buttons" style="direction: rtl">
        <a href="{{ url('/get-plans') }}">
            <button class="function-button">عرض</button>
        </a>
        <a href="{{ url('/add-plan-page') }}">
            <button class="function-button">اضافة</button>
        </a>
        <a href="{{ url('/weekly-traffic-functions') }}">
            <button class="function-button">مخطط مرور القائد</button>
        </a>
        <a href="{{ url('/kataep-plans') }}">
            <button class="function-button">التزامات الكتائب</button>
        </a>
    </div>
@stop
