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
            <input type="text" name="militray_id" id="militray_id"
                value="{{ Numbers::ShowInArabicDigits($officer->militray_id) }}" disabled />
            <label> رقم الأقدمية </label>
            <input type="text" name="old_id" id="old_id" value="{{ Numbers::ShowInArabicDigits($officer->old_id) }}" placeholder=" رقم الأقدمية"
                disabled />
            <label> الرتبة </label>
            <input type="text" name="degree" id="degree" value="{{ $officer->degree }}"
            disabled />

            <label> الأسم </label>
            <input type="text" name="name" id="officer-name" value="{{ $officer->name }}"
                disabled />
            <br />
            <label> الوحدة</label>
            <input type="text" name="kateba_id" id="kateba_id" value="{{ $officer->kateba->katepa_name }}"
            disabled />

            <label> تاريخ الأنضمام</label>
            <input type="text" name="join_at" id="join_at" value="{{ Numbers::ShowInArabicDigits($officer->join_at) }}" disabled />
            <label> الوظيفة</label>
            <input type="text" name="job" id="officer-job" value="{{ $officer->job }}"
                disabled />
            <label> التخصص</label>
            <input type="text" name="specialist" id="officer-specialist"
                value="{{ Numbers::ShowInArabicDigits($officer->specialist) }}" disabled />
            <br />
            <label> الفئة </label>
            <input type="text" name="officer_type" id="officer_type" value="{{ $officer->officer_type }}"
            disabled />

            <label> السلاح </label>
            <input type="text" name="gun_id" id="gun_id" value="{{ $officer->gun->gun_name }}"
            disabled />

            <label> رقم الدفعة </label>
            <input type="text" name="gun_number" id="gun_number" value="{{ Numbers::ShowInArabicDigits($officer->gun_number) }}"
            disabled />

            <label> تاريخ الميلاد </label>
            <input type="date" name="birthdate" id="officer-birthdate" value="{{ $officer->birthdate }}" disabled />
           <br />
            <label> شارع</label>
            <input type="text" name="street" id="officer-street" value="{{ Numbers::ShowInArabicDigits($officer->street) }}"
                disabled />
            <label>قرية </label>
            <input type="text" name="village" id="officer-village" value="{{ $officer->village }}"
                disabled />
            <label>مدينة </label>
            <input type="text" name="country" id="officer-country" value="{{ $officer->country }}"
                disabled />
            <label> محافظة</label>
            <input type="text" name="goverment" id="officer-goverment"
                value="{{ $officer->goverment }}" disabled />
            <br />
            <label> الطول</label>
            <input type="text" name="hight" id="officer-hight" value="{{ Numbers::ShowInArabicDigits($officer->hight) }}"
                disabled />
            <label>الوزن </label>
            <input type="text" name="weight" id="officer-weight" value="{{ Numbers::ShowInArabicDigits($officer->weight) }}"
                disabled />
            <label> تليفون 1</label>
            <input type="text" name="phone1" id="officer-phone1" value="{{ Numbers::ShowInArabicDigits($officer->phone1) }}"
                disabled />
                <label> تليفون 2</label>
                <input type="text" name="phone2" id="officer-phone2" value="{{ Numbers::ShowInArabicDigits($officer->phone2) }}"
                    disabled />
            <br />
      
            <label> الكلية</label>
                <input type="text" name="university" id="officer-university" value="{{ $officer->university }}"
                disabled />
            <label> ملاحظات</label>
            <input type="text" name="notes" id="officer-notes" value="{{ $officer->notes }}"
                disabled />
                <br />
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
