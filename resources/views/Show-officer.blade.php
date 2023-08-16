<style>
    h1 {
        margin-top: 200px
    }

    input,
    select {
        padding: 10px;
        margin-block: 10px;
        min-width: 300px;
    }

    #add-officer {
        direction: rtl
    }

    .add-btn {
        padding: 15px;
        border: 0px;
        background-color: rgb(73, 141, 73);
        width: 100px;
        color: white;
        font-size: 20px
    }
    .download{
        background-color: rgb(68, 168, 68);
        padding: 10px;
        width: 200px;
        border: 0px;
        font-size: 20px;
        font-weight: bold;
        margin-right: 50px
    }
    .download:hover{
        cursor: pointer;
    }

    .add-btn:hover {
        cursor: pointer;
    }

    .file {
        border: 1px solid rgb(85, 84, 84);
    }
</style>
@extends('layouts.general-layout')
@section('content')

    <div id="add-officer">
        <div id="intro" style="text-align: center">
            <h1>عرض بيانات ضابط</h1>
            <a href="{{ url('/') }}">                
                <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        <div class="input">
            <label>الرقم العسكري </label>
            <input type="text" name="militray_id" id="militray_id" placeholder="أدخل الرقم العسكري"
                value="{{ $officer->militray_id }}" disabled />
            <label> رقم الأقدمية </label>
            <input type="text" name="old_id" id="old_id" value="{{ $officer->old_id }}" placeholder="أدخل رقم الأقدمية"
                disabled />
            <label> الرتبة </label>
            <select name="degree" disabled>
                <option value="{{ $officer->degree }}"> {{ $officer->degree }}</option>
            </select>
            <label> الأسم </label>
            <input type="text" name="name" id="officer-name" placeholder=" أسم الضابط" value="{{ $officer->name }}"
                disabled />
            <br />
            <label> الوحدة</label>
            <select name="kateba_id" disabled>
                @if ($officer->kateba->katepa_name == 21)
                <option>قيال {{ $officer->kateba->katepa_name }} </option>                    
                @else
                <option>ك {{ $officer->kateba->katepa_name }} </option>                    
                @endif
            </select>
            <label> تاريخ الأنضمام</label>
            <input type="date" name="join_at" id="join_at" value="{{ $officer->join_at }}" disabled />
            <label> الوظيفة</label>
            <input type="text" name="job" id="officer-job" value="{{ $officer->job }}" placeholder="الوظيفة"
                disabled />
            <label> التخصص</label>
            <input type="text" name="specialist" id="officer-specialist" placeholder="التخصص"
                value="{{ $officer->specialist }}" disabled />
            <br />
            <label> الفئة </label>
            <select name="officer_type" id="officer_type" disabled>
                <option value="عامل">عامل</option>
                <option value="فني">فني</option>
                <option value="شرف">شرف</option>
                <option value="احتياط">احتياط</option>
            </select>
            <label> السلاح </label>
            <select name="gun_id" id="gun" disabled>
                @foreach ($guns as $gun)
                    <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                @endforeach
            </select>

            <label> رقم الدفعة </label>
            <select name="gun_number" id="gun_number" disabled>
                <option value="{{ $officer->gun_number }}"> {{ $officer->gun_number }}</option> 
            </select>
            <label> تاريخ الميلاد </label>
            <input type="date" name="birthdate" id="officer-birthdate" value="{{ $officer->birthdate }}" disabled />
           <br />
            <label> شارع</label>
            <input type="text" name="street" id="officer-street" placeholder="شارع" value="{{ $officer->street }}"
                disabled />
            <label>قرية </label>
            <input type="text" name="village" id="officer-village" placeholder="قرية" value="{{ $officer->village }}"
                disabled />
            <label>مدينة </label>
            <input type="text" name="country" id="officer-country" placeholder="مدينة" value="{{ $officer->country }}"
                disabled />
            <label> محافظة</label>
            <input type="text" name="goverment" id="officer-goverment" placeholder="محافظة"
                value="{{ $officer->goverment }}" disabled />
            <br />
            <label> الطول</label>
            <input type="text" name="hight" id="officer-hight" placeholder="الطول" value="{{ $officer->hight }}"
                disabled />
            <label>الوزن </label>
            <input type="text" name="weight" id="officer-weight" placeholder="الوزن" value="{{ $officer->weight }}"
                disabled />
            <label> تليفون 1</label>
            <input type="text" name="phone1" id="officer-phone1" placeholder="تليفون 1" value="{{ $officer->phone1 }}"
                disabled />
                <label> تليفون 2</label>
                <input type="text" name="phone2" id="officer-phone2" placeholder="تليفون 2" value="{{ $officer->phone2 }}"
                    disabled />
            <br />
      
            <label> الكلية</label>
                <input type="text" name="university" id="officer-university" placeholder="الكلية" value="{{ $officer->university }}"
                disabled />
            <label> ملاحظات</label>
            <input type="text" name="notes" id="officer-notes" placeholder="ملاحظات" value="{{ $officer->notes }}"
                disabled />
                <button class="download">تنزيل PDF </button>
            <br />
            @if ($officer->image != null)
                <label> الصورة الشخصية</label>
                <img src="{{ $officer->image }}" width="100" height="100" />
            @endif
            @if ($officer->id_image)
                <label> صورة البطاقة</label>
                <img src="{{ $officer->id_image }}" width="100" height="100" />
            @endif
            @if ($officer->militray_image)
                <label> صورة الكارنية</label>
                <img src="{{ $officer->militray_image }}" width="100" height="100" />
            @endif
        </div>
    </div>

@stop