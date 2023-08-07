<style>
     h1 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 60px
    }

    .btn-success {
        padding: 10px;
        font-size: 30px;
        min-width: 300px;
        background-color: rgb(131, 199, 131);
        margin-bottom: 20px;
        transition: all 3 ease-in-out;
    }

    .btn-success:hover {
        cursor: pointer;
        /* background-color: rgb(64, 224, 190); */
        border-radius: 20%;
    }
    .leader{
        font-size: 30px;
        font-weight: bold;
        margin: 10px;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
@extends('layouts.general-layout')
@section('content')
    <h1>قيادة اللواء 21 إنذار</h1>
    <a href="{{ url('/test') }}"> <button class="btn btn-success">الدخول</button> </a>
    <br />
    <span class="leader"> قائد اللواء عقيد أح/ محمد عادل عبداللطيف يوسف</span>
    <span class="leader"> رئيس أركان اللواء عقيد أح/ محمد نبيل على الحنفى </span>
@stop
