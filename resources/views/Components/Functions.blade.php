<style>
    .function-button{
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
    .function-button:hover{
        cursor: pointer;
        background-color: rgb(64, 224, 190);
        border-radius: 20%;
    }
    </style>
@extends('layouts.general-layout')
@section('content')

<div class="buttons">
    <button class="function-button">قاعدة بيانات الضباط</button>
    <button class="function-button">قاعدة بيانات ضباط الصف</button>
    <button class="function-button">قاعدة بيانات الجنود</button>
    <button class="function-button">الألتزامات</button>
</div>
@stop