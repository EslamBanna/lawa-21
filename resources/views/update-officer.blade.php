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
            <h1>تعديل بيانات ضابط</h1>
            <a href="{{ url('/') }}">   
                <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        <form action="{{ url('/update-officer-data/' . $officer->id) }}" method="POST">
            @csrf
            <div class="input">
                <label>الرقم العسكري </label>
                <input type="text" name="militray_id" id="militray_id" placeholder="أدخل الرقم العسكري"
                    value="{{ $officer->militray_id }}" required/>
                <label> رقم الأقدمية </label>
                <input type="text" name="old_id" id="old_id" value="{{ $officer->old_id }}"
                    placeholder="أدخل رقم الأقدمية" required/>
                <label> الرتبة </label>
                <select name="degree" required>
                    <option value="{{ $officer->degree }}"> {{ $officer->degree }}</option>
                    <option value="لواء أح"> لواء أح</option>
                    <option value="لواء">لواء</option>
                    <option value="عميد أح"> عميدأح</option>
                    <option value="عميد"> عميد</option>
                    <option value="عقيد أح"> عقيد أح</option>
                    <option value="عقيد"> عقيد</option>
                    <option value="مقدم أح"> مقدم أح</option>
                    <option value="مقدم"> مقدم</option>
                    <option value="رائد أح"> رائد أح</option>
                    <option value="رائد"> رائد</option>
                    <option value="نقيب"> نقيب</option>
                    <option value="ملازم أ"> ملازم أ</option>
                    <option value="ملازم">ملازم </option>
                </select>
                <label> الأسم </label>
                <input type="text" name="name" id="officer-name" placeholder=" أسم الضابط"
                    value="{{ $officer->name }}" required/>
                <br />
                <label> الوحدة</label>
                <select name="kateba_id" required>
                    @if ($officer->kateba->katepa_name == 21)
                        {
                        <option value="1">قيال 21
                        </option>
                        }
                    @else
                        <option value="{{ $officer->kateba->id }}">ك {{ $officer->kateba->katepa_name }}</option>
                    @endif
                    <option value="1"> قيال 21 </option>
                    @foreach ($kataebs as $kataeb)
                        @if ($kataeb->id != 1)
                            {
                            <option value="{{ $kataeb->id }}"> ك{{ $kataeb->katepa_name }}</option>
                            }
                        @endif
                    @endforeach
                </select>
                <label> تاريخ الأنضمام</label>
                <input type="date" name="join_at" id="join_at" value="{{ $officer->join_at }}" required/>
                <label> الوظيفة</label>
                <input type="text" name="job" id="officer-job" value="{{ $officer->job }}" placeholder="الوظيفة" required/>
                <label> التخصص</label>
                <input type="text" name="specialist" id="officer-specialist" placeholder="التخصص"
                    value="{{ $officer->specialist }}" required />
                <br />
                <label> الفئة </label>
                <select name="officer_type" id="officer_type" required>
                    <option value="{{ $officer->officer_type }}" selected>{{ $officer->officer_type }}</option>
                    <option value="عامل">عامل</option>
                    <option value="فني">فني</option>
                    <option value="شرف">شرف</option>
                    <option value="احتياط">احتياط</option>
                </select>
                <label> السلاح </label>
                <select name="gun_id" id="gun" required>
                    <option value="{{ $officer->gun_id }}" selected>{{ $officer->gun->gun_name }}</option>
                    @foreach ($guns as $gun)
                        <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                    @endforeach
                </select>

                <label> رقم الدفعة </label>
                <select name="gun_number" id="gun_number" required>
                <option value="{{ $officer->gun_number }}" selected>{{ $officer->gun_number }}</option>
                    @for ($i = 0; $i < 300; $i++)
                        <option value="{{ $i }}"> {{ $i }}</option>
                    @endfor
                </select>
                <label> تاريخ الميلاد </label>
                <input type="date" name="birthdate" id="officer-birthdate" value="{{ $officer->birthdate }}" required/>
                <br />
                <label>شارع </label>
                <input type="text" name="street" id="officer-street" placeholder="شارع"
                    value="{{ $officer->street }}" />
                <label>قرية </label>
                <input type="text" name="village" id="officer-village" placeholder="قرية"
                    value="{{ $officer->village }}" />
                <label>مدينة </label>
                <input type="text" name="country" id="officer-country" placeholder="مدينة"
                    value="{{ $officer->country }}" />
                <label> محافظة</label>
                <input type="text" name="goverment" id="officer-goverment" placeholder="محافظة"
                    value="{{ $officer->goverment }}" />
                <br />
                <label> الطول</label>
                <input type="text" name="hight" id="officer-hight" placeholder="الطول"
                    value="{{ $officer->hight }}" />
                <label>الوزن </label>
                <input type="text" name="weight" id="officer-weight" placeholder="الوزن"
                    value="{{ $officer->weight }}" />
                    <label> الكلية </label>
                    <select  name="university" id="officer-university" required>
                        <option> {{ $officer->university }} </option>
                        <option value="حربية">حربية </option>
                        <option value="فنية عسكرية">فنية عسكرية </option>
                        <option value="د جو"> د جو</option>
                        <option value="معهد الفني"> معهد الفني</option>
                    </select>
                <label> تليفون 1</label>
                <input type="text" name="phone1" id="officer-phone1" placeholder="تليفون 1"
                    value="{{ $officer->phone1 }}" required/>
                <br />
                <label> تليفون 2</label>
                <input type="text" name="phone2" id="officer-phone2" placeholder="تليفون 2"
                    value="{{ $officer->phone2 }}" />
                <label> ملاحظات</label>
                <input type="text" name="notes" id="officer-notes" placeholder="ملاحظات"
                    value="{{ $officer->notes }}" />
                <br />
                <button type="submit" class="btn add-btn"> تعديل</button>
            </div>
        </form>

    </div>

@stop
