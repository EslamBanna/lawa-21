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
            <h1>إضافة جندي</h1>
            <a href="{{ url('/') }}">
                <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
            </a>
        </div>
        <form action="{{ url('/add-solider') }}" method="POST" enctype="multipart/form-data">
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
                            <label>الدرجة </label>
                            <input type="text" name="degree" id="degree" placeholder="أدخل الدرجة" required />
                        </td>
                        <td>
                            <label> الأسم </label>
                            <input type="text" name="name" id="officer-name" placeholder="أدخل أسم الجندي" required />
                        </td>
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
                    </tr>
                    <tr>
                        <td>
                            <label> تاريخ الأنضمام</label>
                            <input type="date" name="join_at" id="join_at" required />
                        </td>
                        <td>
                            <label> تاريخ التسريح</label>
                            <input type="date" name="join_at" id="join_at" required />
                        </td>
                        <td>
                            <label> المؤهل</label>
                            <input type="text" name="certification" id="officer-job" placeholder="المؤهل الدراسي"
                                required />
                        </td>
                        <td>
                            <label> التخصص </label>
                            <input type="text" name="specialist" id="officer-specialist" placeholder="التخصص بالوحدة"
                                required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> السلاح </label>
                            <select name="gun_id" id="gun" required>
                                @foreach ($guns as $gun)
                                    <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <label> تاريخ الميلاد </label>
                            <input type="date" name="birthdate" id="officer-birthdate" />
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
                            <label> العنوان</label>
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
                        <td>
                            <label> الطول </label>
                            <input type="text" name="hight" id="officer-hight" placeholder="الطول" />
                        </td>
                        <td>
                            <label> الوزن </label>
                            <input type="text" name="weight" id="officer-weight" placeholder="الوزن" />
                        </td>
                        <td>
                            <label> الملاحظات </label>
                            <input type="text" name="notes" id="officer-notes" placeholder="ملاحظات" />
                        </td>
                    </tr>
                </table>

                <br />
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
