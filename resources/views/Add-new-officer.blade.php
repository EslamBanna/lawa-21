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
            <h1>إضافة ضابط جديد</h1>
            <a href="{{ url('/') }}">

                <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        <form action="{{ url('/add-officer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input">
                <table>
                    <tr>
                        <td>
                            <label>الرقم العسكري </label>
                            <input type="text" name="militray_id" id="militray_id" placeholder="أدخل الرقم العسكري"
                                required />
                        </td>
                        <td>
                            <label> رقم الأقدمية </label>
                            <input type="text" name="old_id" id="old_id" placeholder="أدخل رقم الأقدمية" required />
                        </td>
                        <td>
                            <label> الرتبة </label>
                            <select name="degree_id" required>
                                @foreach ($degrees as $degree)
                                    @if ($degree->id == 14)
                                    @break
                                @endif
                                <option value="{{ $degree->id }}"> {{ $degree->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label> الأسم </label>
                        <input type="text" name="name" id="officer-name" placeholder="أدخل أسم الضابط" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> الوحدة </label>
                        <select name="kateba_id" required>
                            <option value="1"> قيال 21</option>
                            @foreach ($kataebs as $kataeb)
                                @if ($kataeb->id != 1)
                                    {
                                    <option value="{{ $kataeb->id }}"> ك{{ $kataeb->katepa_name }}</option>
                                    }
                                @endif
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label> تاريخ الأنضمام</label>
                        <input type="date" name="join_at" id="join_at" required />
                    </td>
                    <td>
                        <label> الوظيفة </label>
                        <input type="text" name="job" id="officer-job" placeholder="الوظيفة" required />
                    </td>
                    <td>
                        <label> التخصص </label>
                        <input type="text" name="specialist" id="officer-specialist" placeholder="التخصص" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> الفئة </label>
                        <select name="officer_type" id="officer_type" required>
                            <option value="عامل">عامل</option>
                            <option value="فني">فني</option>
                            <option value="شرف">شرف</option>
                            <option value="احتياط">احتياط</option>
                        </select>
                    </td>
                    <td>
                        <label> السلاح </label>
                        <select name="gun_id" id="gun" required>
                            @foreach ($guns as $gun)
                                <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label> رقم الدفعة </label>
                        <select name="gun_number" id="gun_number" required>
                            @for ($i = 0; $i < 300; $i++)
                                <option value="{{ $i }}"> {{ $i }}</option>
                            @endfor
                        </select>
                    </td>
                    <td>
                        <label> تاريخ الميلاد </label>
                        <input type="date" name="birthdate" id="officer-birthdate" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> الطول </label>
                        <input type="text" name="hight" id="officer-hight" placeholder="الطول" required />
                    </td>
                    <td>
                        <label>الوزن </label>
                        <input type="text" name="weight" id="officer-weight" placeholder="الوزن" required />
                    </td>
                    <td>
                        <label> تليفون 1</label>
                        <input type="text" name="phone1" id="officer-phone1" placeholder="تليفون 1" required />
                    </td>
                    <td>
                        <label> تليفون 2</label>
                        <input type="text" name="phone2" id="officer-phone2" placeholder="تليفون 2" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> العنوان </label>
                        <input type="text" name="street" id="officer-street" placeholder="شارع" />
                    </td>
                    <td>
                        <input type="text" name="village" id="officer-village" placeholder="قرية" />
                    </td>
                    <td>
                        <input type="text" name="country" id="officer-country" placeholder="مدينة" />
                    </td>
                    <td>
                        <input type="text" name="goverment" id="officer-goverment" placeholder="محافظة" />
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <label> الكلية </label>
                        <select name="university" id="officer-university" required>
                            <option value="حربية">حربية </option>
                            <option value="فنية عسكرية">فنية عسكرية </option>
                            <option value="د جو"> د جو</option>
                            <option value="معهد الفني"> معهد الفني</option>
                            <option value="كلية الضباط الإحتياط">كلية الضباط الإحتياط</option>
                        </select>
                    </td>
                    <td>
                        <label> ملاحظات</label>
                        <input type="text" name="notes" id="officer-notes" placeholder="ملاحظات" />
                    </td>
                </tr>
            </table>
            <label> الصورة الشخصية</label>
            <input type="file" name="image" class="file" />
            <label> صورة البطاقة</label>
            <input type="file" name="id_image" class="file" />
            <label> صورة الكارنية</label>
            <input type="file" name="militray_image" class="file" />
        </div>
        <button type="submit" class="btn add-btn"> إضافة</button>
    </form>

</div>

@stop
