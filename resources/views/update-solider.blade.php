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
            <h1>تعديل بيانات جندي</h1>
            <a href="{{ url('/') }}">
                <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        <form action="{{ url('/update-solider-data/' . $officer->id) }}" method="POST">
            @csrf
            <div class="input">
                <label>الرقم العسكري </label>
                <input type="text" name="militray_id" id="militray_id" placeholder="أدخل الرقم العسكري"
                    value="{{ $officer->militray_id }}" />
                <label> الرتبة </label>
                <input type="text" name="degree" id="degree" placeholder="أدخل الدرجة"
                    value="{{ $officer->degree }}" />
                <label> الأسم </label>
                <input type="text" name="name" id="officer-name" placeholder=" أسم الجندي"
                    value="{{ $officer->name }}" />

                <label> الوحدة</label>
                <select name="kateba_id">
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
                <br />
                <label> تاريخ الأنضمام</label>
                <input type="date" name="join_at" id="join_at" value="{{ $officer->join_at }}" />
                <label> تاريخ التسريح</label>
                <input type="text" name="left_in" id="left_in" value="{{ $officer->left_in }}" />
                <label> المؤهل</label>
                <input type="text" name="certification" id="officer-job" value="{{ $officer->certification }}"
                    placeholder="الوظيفة" />
                <label> التخصص</label>
                <input type="text" name="specialist" id="officer-specialist" placeholder="التخصص"
                    value="{{ $officer->specialist }}" />
                <br />
                <label> تاريخ الميلاد </label>
                <input type="date" name="birthdate" id="officer-birthdate" value="{{ $officer->birthdate }}" />
                <label>شارع </label>
                <input type="text" name="street" id="officer-street" placeholder="شارع"
                    value="{{ $officer->street }}" />
                <label>قرية </label>
                <input type="text" name="village" id="officer-village" placeholder="قرية"
                    value="{{ $officer->village }}" />
                <label>مدينة </label>
                <input type="text" name="country" id="officer-country" placeholder="مدينة"
                    value="{{ $officer->country }}" />
                <br />
                <label> محافظة</label>
                <input type="text" name="goverment" id="officer-goverment" placeholder="محافظة"
                    value="{{ $officer->goverment }}" />
                <label> الطول</label>
                <input type="text" name="hight" id="officer-hight" placeholder="الطول"
                    value="{{ $officer->hight }}" />
                <label>الوزن </label>
                <input type="text" name="weight" id="officer-weight" placeholder="الوزن"
                    value="{{ $officer->weight }}" />

                <label> السلاح </label>
                <select name="gun_id" id="gun">
                    <option value="{{ $officer->gun_id }}" selected> {{ $officer->gun->gun_name }}</option>
                    @foreach ($guns as $gun)
                        <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                    @endforeach
                </select>
                <br />

                <label> تليفون 1</label>
                <input type="text" name="phone1" id="officer-phone1" placeholder="تليفون 1"
                    value="{{ $officer->phone1 }}" />
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
