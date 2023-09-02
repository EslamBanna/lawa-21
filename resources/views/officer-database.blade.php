<style>
    #kateaba_name,
    select {
        min-width: 100px;
    }

    .filtartion-class {
        display: inline;
    }

    .search-btn {
        background-color: rgb(41, 212, 112);
        padding: 10px;
        border: 0
    }

    .search-btn:hover {
        cursor: pointer;
    }

    .row-filtartion {
        border: 1px solid black;
        padding: 20px
    }

    tr,
    td,
    th,
    table {
        border: 1px solid black;
        direction: rtl
    }

    td,
    th {
        padding: 5px
    }

    thead {
        background-color: rgb(63, 58, 58);
        color: white;
        /* padding: 20px */
    }

    h1,
    .row-filtartion {
        text-align: center
    }

    input,
    select {
        padding: 10px
    }

    .update-btn {
        margin-bottom: 3px;
        background-color: rgb(23, 133, 177);
        border: 0;
        color: white;
        padding: 5px
    }

    .update-btn:hover {
        cursor: pointer;
    }

    .show-btn {
        margin-bottom: 3px;
        background-color: rgb(62, 170, 62);
        border: 0;
        color: white;
        padding: 6px
    }

    .show-btn:hover {
        cursor: pointer;
    }

    td {
        text-align: center
    }

    .delete-btn {
        margin-bottom: 3px;
        background-color: red;
        border: 0;
        color: white;
        padding: 6px
    }

    .delete-btn:hover {
        cursor: pointer;
    }

    #add-new-officer {
        text-align: center;
        padding: 20px
    }

    #add-new-officer button {
        background-color: rgb(48, 48, 180);
        color: white;
        font-size: 15px;
        padding: 10px;
        border: 0px
    }

    #add-new-officer button:hover {
        cursor: pointer;
    }

    .kataepa-head {
        background-color: green;
        font-weight: bold;
        color: white
    }
</style>
<div id="tempalte">
    <div id="intro" style="text-align: center">
        <h1>قاعدة بيانات الضباط</h1>
        <a href="{{ url('/') }}">

            <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
        </a>
    </div>
    <div class="row-filtartion" style="direction: rtl">
        <div id="filtartion-form">
            <form action="{{ url('/filter-officer') }}" method="POST" style="display: inline">
                @csrf
                <div id="katepa" class="filtartion-class">
                    <label> أختر الوحدة </label>
                    <select name="kateaba" id="kateaba_name">
                        <option value="1"> قيال ٢١</option>
                        @foreach ($kataebs as $kataeb)
                            @if ($kataeb->id != 1)
                                {
                                <option value="{{ $kataeb->id }}"> ك{{ $kataeb->katepa_name }}</option>
                                }
                            @endif
                        @endforeach
                    </select>
                </div>
                <div id="guns" class="filtartion-class">
                    <label> أختر السلاح </label>
                    <select name="gun_id" id="gun">
                        @foreach ($guns as $gun)
                            <option value="{{ $gun->id }}"> {{ $gun->gun_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="gun_num" class="filtartion-class">
                    <label> أختر رقم الدفعة </label>
                    <select name="gun_number" id="gun_number">
                        @for ($i = 0; $i < 300; $i++)
                            <option value="{{ $i }}"> {{ Numbers::ShowInArabicDigits($i) }}</option>
                        @endfor
                    </select>
                </div>
                <div id="officer_typee" class="filtartion-class">
                    <label> أختر فئة الضابط </label>
                    <select name="officer_type" id="officer_type">
                        <option value="عامل">عامل</option>
                        <option value="فني">فني</option>
                        <option value="شرف">شرف</option>
                        <option value="احتياط">احتياط</option>
                    </select>
                </div>
                <br />
                <br />
                <button style="width:100px;" class="search-btn" type="submit"> البحث </button>
            </form>
            <button style="width:100px; background:red" class="search-btn" onclick="reset()"> RESET </button>
        </div>
    </div>

    <div class="row-filtartion" style="direction: rtl">
        <div id="filtartion-form">
            <form action="{{ url('/get-officer') }}" method="POST">
                @csrf
                <div id="katepa" class="filtartion-class">
                    <input type="text" name="officer_name" id="officer-name" placeholder="أدخل الأسم هنا">
                    <span>أو </span>
                    <input type="text" name="militray_id" id="officer-id" placeholder="أدخل الرقم العسكري هنا">
                    <span>أو </span>
                    <input type="text" name="old_id" id="officer-old-id" placeholder="أدخل رقم الأقدمية هنا">
                </div>
                <br />
                <br />
                <button style="width:100px;" class="search-btn" type="submit"> البحث </button>
                <button style="width:100px; background:red" class="search-btn" type="reset"> RESET </button>
            </form>
        </div>
    </div>

    <div id="add-new-officer" style="text-align: center">
        <a href="{{ url('/add-new-officer') }}">
            <button> إضافة ضابط جديد </button>
        </a>
        <form action="{{ url('/export-officers') }}" method="POST" style="display: inline">
            @csrf
            <input type="hidden" value="{{ $officers }}" name="officers" />
            <button style="background-color: green" type="submit">تنزيل PDF </button>
        </form>
        {{-- <a href="{{ url('/export-officers') }}">
            <button style="background-color: green">تنزيل PDF </button>
        </a> --}}
    </div>
    <?php
    $kat = ['قيال ٢١', ' كـ ٤١', 'كـ ٤٣', 'كـ ٤٤', 'كـ ٦٨', 'كـ ٦٩', 'كـ ٧٤', 'كـ ٧٩', '', ''];
    $current_kat = 0;
    $bool = false;
    ?>
    <table>
        <thead>
            <tr>
                <th rowspan="2">م</th>
                <th rowspan="2" style="min-width: 50px">رتبة</th>
                <th rowspan="2">الرقم العسكري</th>
                <th rowspan="2">رقم الأقدمية</th>
                <th rowspan="2" style="width: 200px">الأسم</th>
                <th rowspan="2">الوحدة</th>
                <th rowspan="2">تاريخ الضم</th>
                <th rowspan="2">الكلية</th>
                <th rowspan="2">الوظيفة</th>
                <th rowspan="2">التخصص</th>
                <th rowspan="2">نوع الضابط</th>
                <th rowspan="2">السلاح</th>
                <th rowspan="2">رقم الدفعة</th>
                <th rowspan="2">تاريخ الميلاد</th>
                <th rowspan="1" colspan="4"> العنوان</th>
                <th rowspan="2">طول</th>
                <th rowspan="2">وزن</th>
                <th rowspan="2">تليفون ١</th>
                <th rowspan="2">تليفون ٢</th>
                <th rowspan="2">الملاحظات</th>
                <th rowspan="2" style="width: 50px">عمليات</th>
            </tr>

            <tr>
                <th colspan="1">شارع</th>
                <th colspan="1">قرية</th>
                <th colspan="1">مدينة</th>
                <th colspan="1">محافظة</th>
            </tr>

        </thead>
        <tr class="kataepa-head">
            <td colspan="24">
                {{ $kat[$current_kat] }}
            </td>
        </tr>
        @foreach ($officers as $index => $officer)
            @while ($officer->kateba_id != $current_kat + 1)
                <?php
                $current_kat++;
                $bool = true;
                ?>
            @endwhile
            @if ($bool)
                <tr class="kataepa-head">
                    <td colspan="24">
                        {{ $kat[$current_kat] }}
                    </td>
                </tr>
                <thead>
                    <tr>
                        <th rowspan="2">م</th>
                        <th rowspan="2" style="min-width: 50px">رتبة</th>
                        <th rowspan="2">الرقم العسكري</th>
                        <th rowspan="2">رقم الأقدمية</th>
                        <th rowspan="2" style="width: 200px">الأسم</th>
                        <th rowspan="2">الوحدة</th>
                        <th rowspan="2">تاريخ الضم</th>
                        <th rowspan="2">الكلية</th>
                        <th rowspan="2">الوظيفة</th>
                        <th rowspan="2">التخصص</th>
                        <th rowspan="2">نوع الضابط</th>
                        <th rowspan="2">السلاح</th>
                        <th rowspan="2">رقم الدفعة</th>
                        <th rowspan="2">تاريخ الميلاد</th>
                        <th rowspan="1" colspan="4"> العنوان</th>
                        <th rowspan="2">طول</th>
                        <th rowspan="2">وزن</th>
                        <th rowspan="2">تليفون ١</th>
                        <th rowspan="2">تليفون ٢</th>
                        <th rowspan="2">الملاحظات</th>
                        <th rowspan="2">عمليات</th>
                    </tr>

                    <tr>
                        <th colspan="1">شارع</th>
                        <th colspan="1">قرية</th>
                        <th colspan="1">مدينة</th>
                        <th colspan="1">محافظة</th>
                    </tr>

                </thead>
                <?php
                $bool = false;
                ?>
            @endif
            <tr>
                <td>{{ Numbers::ShowInArabicDigits($index + 1) }} </td>
                <td>{{ $officer->degree }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->militray_id) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->old_id) }} </td>
                <td>{{ $officer->name }} </td>
                <td>
                    @if ($officer->kateba_id == 1)
                        قيال {{ $officer->kateba->katepa_name }}
                    @else
                        ك {{ $officer->kateba->katepa_name }}
                    @endif


                </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->join_at) }} </td>
                <td>{{ $officer->university }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->job) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->specialist) }} </td>
                <td>{{ $officer->officer_type }} </td>
                <td>{{ $officer->Gun->gun_name }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->gun_number) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->birthdate) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->street) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->village) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->country) }} </td>
                <td>{{ $officer->goverment }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->hight) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->weight) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->phone1) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->phone2) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->notes) }} </td>
                <td>
                    <a href="{{ url('/show-officer/' . $officer->id) }}">
                        <button class="show-btn">عرض</button>
                    </a>
                    <a href="{{ url('/update-officer/' . $officer->id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{ url('/delete-officer/' . $officer->id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script>
        window.onload = reset()

        function reset() {
            document.getElementById('kateaba_name').value = '';
            document.getElementById('gun').value = '';
            document.getElementById('gun_number').value = '';
            document.getElementById('officer_type').value = '';
        }
    </script>
</div>
