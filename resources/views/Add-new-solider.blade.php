<style>
    h1{
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
    .add-btn{
        padding: 15px;
        border: 0px;
        background-color: rgb(73, 141, 73);
        width: 100px;
        color: white;
        font-size: 20px
    }
    .add-btn:hover{
        cursor: pointer;
    }
    .file{
        border: 1px solid rgb(85, 84, 84);
    }
</style>
@extends('layouts.general-layout')
@section('content')

    <div id="add-officer">
        <div id="intro" style="text-align: center">
            <h1>إضافة جندي</h1>
            <a href="{{ url('/') }}">                
                <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        <form action="{{ url('/add-solider') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input">
                <label>الرقم العسكري </label>
                <input type="text" name="militray_id" id="militray_id" placeholder="أدخل الرقم العسكري" />

                <label>الدرجة </label>
                <input type="text" name="degree" id="degree" placeholder="أدخل الدرجة" />
                
                <label> الأسم </label>
                <input type="text" name="name" id="officer-name" placeholder="أدخل أسم الجندي" />
                <select name="kateba_id">
                    <option value="1"> قيال 21</option>
                    @foreach ($kataebs as $kataeb)
                        @if ($kataeb->id != 1)
                            {
                            <option value="{{ $kataeb->id }}"> ك{{ $kataeb->katepa_name }}</option>
                            }
                        @endif
                    @endforeach
                </select>
                <br />
                <label> تاريخ الأنضمام</label>
                <input type="date" name="join_at" id="join_at" />
                <input type="text" name="certification" id="officer-job" placeholder="المؤهل" />
                <input type="text" name="specialist" id="officer-specialist" placeholder="التخصص بالوحدة" />
                <label>  السلاح </label>
                <select name="gun_id" id="gun">
                    @foreach ($guns as $gun)
                        <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                    @endforeach
                </select>
                <br />
                <label>  تاريخ الميلاد </label>
                <input type="date" name="birthdate" id="officer-birthdate" />
                <input type="text" name="street" id="officer-street" placeholder="شارع"/>
                <input type="text" name="village" id="officer-village"  placeholder="قرية"/>
                <input type="text" name="country" id="officer-country"  placeholder="مدينة"/>
                <input type="text" name="goverment" id="officer-goverment"  placeholder="محافظة"/>
                <input type="text" name="hight" id="officer-hight"  placeholder="الطول"/>
                <input type="text" name="weight" id="officer-weight"  placeholder="الوزن"/>
                <input type="text" name="tamam" id="officer-tamam"  placeholder="التمام"/>
                <br />
                <input type="text" name="phone1" id="officer-phone1"  placeholder="تليفون 1"/>
                <input type="text" name="phone2" id="officer-phone2"  placeholder="تليفون 2"/>
                <input type="text" name="notes" id="officer-notes"  placeholder="ملاحظات"/>
                <br />
                <label> الصورة الشخصية</label>
                <input type="file" name="image" class="file"/>
                <label> صورة البطاقة</label>
                <input type="file" name="id_image" class="file"/>
                <label> صورة الكارنية</label>
                <input type="file" name="militray_image" class="file"/>
            </div>
            <button type="submit" class="btn add-btn"> إضافة</button>
        </form>

    </div>

@stop