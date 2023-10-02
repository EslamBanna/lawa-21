<style>
    h1 {
        margin-top: 200px;
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
        font-weight: bold
    }

    .btn-success:hover {
        cursor: pointer;
        /* background-color: rgb(64, 224, 190); */
        border-radius: 20%;
    }

    .leader {
        font-size: 30px;
        font-weight: bold;
        margin: 10px;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #left-akm {
        position: absolute;
        left: 15%;
        top: 40%;
    }

    #right-akm {
        position: absolute;
        right: 15%;
        top: 40%;
        transform: rotateY(180deg);
    }

    #nesr {
        /* color: yellow; */
        font-size: 50px;
    }
</style>
@extends('layouts.general-layout')
@section('content')
    <div id="left-akm">
        <img src="{{ asset('akm.png') }}" alt="akm" width="200" height="200" />
    </div>
    <div class="content-center">
        <h1>قيادة اللواء ٢١ إنذار</h1>
        <a> <button class="btn btn-success" onclick="enter()">الدخول</button> </a>
    </div>
    <div id="right-akm">
        <img src="{{ asset('akm.png') }}" alt="akm" width="200" height="200" />
    </div>
    <br />
    <div id="leaders">
        <span class="leader"> قائد اللواء عقيد أح/ محمد عادل عبداللطيف يوسف</span>
        <span class="leader"> رئيس أركان اللواء عقيد أح/ محمد نبيل على الحنفى </span>
    </div>
    <div id="nesr">
        <img src="{{ asset('common/nesr.png') }}" alt="nesr" width="100" height="100" />
        <br />
        &star;
        &star;
    </div>
    <script>
        function enter() {
            let enterPassword = prompt('أدخل كلمة السر للدخول');
            if(enterPassword != "21103") {
                alert('كلمة السر خاطئة');
                return;
            }else{
                window.location.href = "{{URL::to('functions')}}"
            }
        }
    </script>
@stop
