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
        padding: 2px
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

    td {
        text-align: center
    }
    .kataepa-head {
        background-color: green;
        font-weight: bold;
        color: white
    }
</style>
<div id="tempalte">
    <div id="intro" style="text-align: center">
        <h1>قاعدة بيانات الجنود</h1>
        <a href="{{ url('/') }}">
            
            <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
        </a>
    </div>
    <div class="row-filtartion">
        <div id="filtartion-form"  style="direction: rtl">
            <form action="{{ url('/filter-soliders') }}" method="POST" style="display:inline">
                @csrf
                <div id="katepa" class="filtartion-class">
                    <label> أختر الوحدة </label>
                    <select name="kateaba" id="kateaba_name">
                        <option value="1"> قيال 21</option>
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
                <br />
                <br />
                <button style="width:100px;" class="search-btn" type="submit"> البحث </button>
            </form>
            <button style="width:100px; background:red" class="search-btn" onclick="reset()"> RESET </button>
        </div>
    </div>

    <div class="row-filtartion" style="direction: rtl">
        <div id="filtartion-form">
            <form action="{{ url('/get-solider') }}" method="POST">
                @csrf
                <div id="katepa" class="filtartion-class">
                    <input type="text" name="officer_name" id="officer-name" placeholder="أدخل الأسم هنا">
                    <span>أو </span>
                    <input type="text" name="militray_id" id="officer-id" placeholder="أدخل الرقم العسكري هنا">
                </div>
                <br />
                <br />
                <button style="width:100px;" class="search-btn" type="submit"> البحث </button>
                <button style="width:100px; background:red" class="search-btn" type="reset"> RESET </button>
            </form>
        </div>
    </div>
    <div id="add-new-officer" style="text-align: center">
        <a href="{{ url('/add-new-solider') }}">
            <button> إضافةجندي جديد </button>
        </a>
        <form action="{{ url('/export-officers') }}" method="POST" style="display: inline">
            @csrf
            <input type="hidden" value="{{ $officers }}" name="soliders" />
            <button style="background-color: green" type="submit">تنزيل PDF </button>
        </form>    </div>
    <?php
    $kat = ['قيال ٢١', ' كـ ٤١', 'كـ ٤٣', 'كـ ٤٤', 'كـ ٦٨', 'كـ ٦٩', 'كـ ٧٤', 'كـ ٧٩', '', ''];
    $current_kat = 0;
    $bool = false;
    ?>
    <table>
        <thead>
            <tr>
                <th rowspan="2">م</th>
                <th rowspan="2">درجة</th>
                <th rowspan="2">الرقم العسكري</th>
                <th rowspan="2">الأسم</th>
                <th rowspan="2">الوحدة</th>
                <th rowspan="2">تاريخ الضم</th>
                <th rowspan="2">تاريخ التسريح</th>
                <th rowspan="2">المؤهل</th>
                <th rowspan="2">التخصص بالوحدة</th>
                <th rowspan="2">السلاح</th>
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
                        <th rowspan="2">درجة</th>
                        <th rowspan="2">الرقم العسكري</th>
                        <th rowspan="2">الأسم</th>
                        <th rowspan="2">الوحدة</th>
                        <th rowspan="2">تاريخ الضم</th>
                        <th rowspan="2">تاريخ التسريح</th>
                        <th rowspan="2">المؤهل</th>
                        <th rowspan="2">التخصص بالوحدة</th>
                        <th rowspan="2">السلاح</th>
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
                <td>{{ Numbers::ShowInArabicDigits(++$index) }} </td>
                <td>{{ $officer->degree }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->militray_id) }} </td>
                <td>{{ $officer->name }} </td>
                <td>
                    @if ($officer->kateba_id == 1)
                        قيال {{ $officer->kateba->katepa_name }}
                    @else
                        ك {{ $officer->kateba->katepa_name }}
                    @endif
                </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->join_at) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->left_in) }} </td>
                <td>{{ $officer->certification }} </td>
                <td>{{ $officer->specialist }} </td>
                <td>{{ $officer->Gun->gun_name }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->birthdate) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->street) }} </td>
                <td>{{ $officer->village }} </td>
                <td>{{ $officer->country }} </td>
                <td>{{ $officer->goverment }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->hight) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->weight) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->phone1) }} </td>
                <td>{{ Numbers::ShowInArabicDigits($officer->phone2) }} </td>
                <td>{{ $officer->notes }} </td>
                <td style="text-align: center; width:50px">
                    <a href="{{ url('/show-solider/' . $officer->id) }}">
                        <button class="show-btn">عرض</button>
                    </a>
                    <a href="{{ url('/update-solider/' . $officer->id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{ url('/delete-solider/' . $officer->id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <script>
        window.onload = reset()
        function reset() {
            document.getElementById('kateaba_name').value = '';
            document.getElementById('gun').value = '';
        }
    </script>
</div>
