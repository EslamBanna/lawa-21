<style>
    #add-plan {
        direction: rtl
    }

    #intro {
        margin-bottom: 50px
    }

    .input {
        width: 200px;
        padding: 10px
    }

    #notes {
        resize: none;
        /* width: 500px; */
        margin-top: 15px;
        margin-bottom: 15px
    }

    #katepa {
        margin-left: 20px;
        margin-top: 20px
    }

    .search-btn {
        background-color: rgb(41, 212, 112);
        padding: 10px;
        border: 0;
        margin-top: 20px
    }

    .search-btn:hover {
        cursor: pointer;
    }

    #attch {
        border: 1px solid black;
        padding: 10px
    }

    #spec label {
        font-weight: bold;
    }
    #actions{
        border: 1px solid black;
        padding: 10px
    }
</style>
@extends('layouts.general-layout')
@section('content')

    <div id="add-plan">
        <div id="intro" style="text-align: center">
            <h1>إضافة إلتزام جديد</h1>
            <a href="{{ url('/') }}">
                <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea> الموضوع </textarea>
            <br />
            <div id="actions">
                <label>نوع الإلتزام </label>
                <select name="type_of_plan" id="type_of_plan" class="input">
                    <option value="التزام"> التزام</option>
                    <option value="مرور"> مرور</option>
                    <option value="تحركات"> تحركات</option>
                    <option value="تعليمات"> تعليمات</option>
                    <option value="مخطط مرور القائد"> 'مخطط مرور القائد</option>
                </select>
                <label> من </label>
                <input type="date" name="start_plan" id="start_plan" class="input" />
                <label> الي </label>
                <input type="date" name="start_plan" id="start_plan" class="input" />
                <br />
                <div id="spec" style="text-align: center">
                    <label> إختصاص:-</label>
                    @foreach ($kataebs as $kateba)
                        @if ($kateba->id == 1)
                            <label> قيال {{ $kateba->katepa_name }}</label>
                        @elseif ($kateba->id <= 8)
                            <label> ك{{ $kateba->katepa_name }}</label>
                        @else
                            <label> {{ $kateba->katepa_name }}</label>
                        @endif <input type="checkbox" name="{{ $kateba->id }}"
                            value="{{ $kateba->id }}" id="katepa" />
                        -
                    @endforeach
                </div>
                <label> الملاحظات </label>
                <br />
                <textarea id="notes" cols="100" placeholder="الملاحظات"> </textarea>
                <br />
                <label> المؤيدات </label>
                <input type="file" name="attch" id="attch" multiple />
                <br />
            </div>

            <button style="width:100px;" class="search-btn" type="submit"> حفظ </button>

        </form>
    </div>
@stop
