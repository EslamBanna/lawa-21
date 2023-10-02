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
                <table>
                    <tr>
                        <td> <label>الرقم العسكري </label>
                            <input type="text" name="militray_id" id="militray_id" placeholder="أدخل الرقم العسكري"
                                value="{{ $officer->militray_id }}" required />
                        </td>
                        <td> <label> رقم الأقدمية </label>
                            <input type="text" name="old_id" id="old_id" value="{{ $officer->old_id }}"
                                placeholder="أدخل رقم الأقدمية" required />
                        </td>
                        <td> <label> الرتبة </label>
                            <select name="degree_id" required>
                                @foreach ($degrees as $degree)
                                    @if ($degree->id == 14)
                                    @break
                                @endif
                                @if ($degree->id == $officer->degree_id)
                                    <option value="{{ $degree->id }}" selected> {{ $degree->name }}</option>
                                @endif
                                @continue($degree->id == $officer->degree_id)
                                <option value="{{ $degree->id }}"> {{ $degree->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td> <label> الأسم </label>
                        <input type="text" name="name" id="officer-name" placeholder=" أسم الضابط"
                            value="{{ $officer->name }}" required />
                    </td>
                </tr>
                <tr>
                    <td> <label> الوحدة</label>
                        <select name="kateba_id" required>
                            @if ($officer->kateba->katepa_name == 21)
                                {
                                <option value="1">قيال 21
                                </option>
                                }
                            @else
                                <option value="{{ $officer->kateba->id }}">ك {{ $officer->kateba->katepa_name }}
                                </option>
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
                    </td>
                    <td> <label> تاريخ الأنضمام</label>
                        <input type="date" name="join_at" id="join_at" value="{{ $officer->join_at }}" required />
                    </td>
                    <td> <label> الوظيفة</label>
                        <input type="text" name="job" id="officer-job" value="{{ $officer->job }}"
                            placeholder="الوظيفة" required />
                    </td>
                    <td> <label> التخصص</label>
                        <input type="text" name="specialist" id="officer-specialist" placeholder="التخصص"
                            value="{{ $officer->specialist }}" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> الفئة </label>
                        <select name="officer_type" id="officer_type" required>
                            <option value="{{ $officer->officer_type }}" selected>{{ $officer->officer_type }}
                            </option>
                            <option value="عامل">عامل</option>
                            <option value="فني">فني</option>
                            <option value="شرف">شرف</option>
                            <option value="احتياط">احتياط</option>
                        </select>
                    </td>
                    <td>
                        <label> السلاح </label>
                        <select name="gun_id" id="gun" required>
                            <option value="{{ $officer->gun_id }}" selected>{{ $officer->gun->gun_name }}</option>
                            @foreach ($guns as $gun)
                                <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label> رقم الدفعة </label>
                        <select name="gun_number" id="gun_number" required>
                            <option value="{{ $officer->gun_number }}" selected>{{ $officer->gun_number }}</option>
                            @for ($i = 0; $i < 300; $i++)
                                <option value="{{ $i }}"> {{ $i }}</option>
                            @endfor
                        </select>
                    </td>
                    <td>
                        <label> تاريخ الميلاد </label>
                        <input type="date" name="birthdate" id="officer-birthdate" value="{{ $officer->birthdate }}"
                            required />
                    </td>
                </tr>
                <tr>
                    <td>

                        <label>شارع </label>
                        <input type="text" name="street" id="officer-street" placeholder="شارع"
                            value="{{ $officer->street }}" />
                    </td>
                    <td>
                        <label>قرية </label>
                        <input type="text" name="village" id="officer-village" placeholder="قرية"
                            value="{{ $officer->village }}" />
                    </td>
                    <td>
                        <label>مدينة </label>
                        <input type="text" name="country" id="officer-country" placeholder="مدينة"
                            value="{{ $officer->country }}" />
                    </td>
                    <td>
                        <label> محافظة</label>
                        <input type="text" name="goverment" id="officer-goverment" placeholder="محافظة"
                            value="{{ $officer->goverment }}" />
                    </td>
                </tr>
                <tr>
                    <td> 
                        <label> الطول</label>
                        <input type="text" name="hight" id="officer-hight" placeholder="الطول"
                            value="{{ $officer->hight }}" />
                    </td>
                    <td> 
                        <label>الوزن </label>
                        <input type="text" name="weight" id="officer-weight" placeholder="الوزن"
                            value="{{ $officer->weight }}" />
                    </td>
                    <td> 
                        <label> الكلية </label>
                        <select name="university" id="officer-university" required>
                            <option> {{ $officer->university }} </option>
                            <option value="حربية">حربية </option>
                            <option value="فنية عسكرية">فنية عسكرية </option>
                            <option value="د جو"> د جو</option>
                            <option value="معهد الفني"> معهد الفني</option>
                        </select>
                    </td>
                    <td> 
                        <label> تليفون 1</label>
                        <input type="text" name="phone1" id="officer-phone1" placeholder="تليفون 1"
                            value="{{ $officer->phone1 }}" required />
                    </td>
                </tr>
                <tr> 
                    <td> </td>
                    <td> 
                        <label> تليفون 2</label>
                        <input type="text" name="phone2" id="officer-phone2" placeholder="تليفون 2"
                            value="{{ $officer->phone2 }}" />
                    </td>
                    <td> 
                        <label> ملاحظات</label>
                        <input type="text" name="notes" id="officer-notes" placeholder="ملاحظات"
                            value="{{ $officer->notes }}" />    
                    </td>
                </tr>
            </table>          
            <button type="submit" class="btn add-btn"> تعديل</button>
        </div>
    </form>

</div>

@stop
