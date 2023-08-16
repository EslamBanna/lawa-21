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
        padding: 10px
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
</style>
<div id="tempalte">
    <div id="intro" style="text-align: center">
        <h1>قاعدة بيانات الجنود</h1>
        <a href="{{ url('/') }}">
            
            <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
        </a>
    </div>
    <div class="row-filtartion">
        <div id="filtartion-form">
            <form action="{{ url('/filter-soliders') }}" method="POST">
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
                <button style="width:100px;" class="search-btn" type="submit"> البحث </button>
            </form>
            <button style="width:100px; background:red" class="search-btn" onclick="reset(1)"> RESET </button>
        </div>
    </div>

    <div class="row-filtartion">
        <div id="filtartion-form">
            <form action="{{ url('/get-solider') }}" method="POST">
                @csrf
                <div id="katepa" class="filtartion-class">
                    <input type="text" name="officer_name" id="officer-name" placeholder="أدخل الأسم هنا">
                    <span>أو </span>
                    <input type="text" name="militray_id" id="officer-id" placeholder="أدخل الرقم العسكري هنا">
                </div>
                <button style="width:100px;" class="search-btn" type="submit"> البحث </button>
                <button style="width:100px; background:red" class="search-btn" type="reset"> RESET </button>
            </form>
        </div>
    </div>
    <div id="add-new-officer" style="text-align: center">
        <a href="{{ url('/add-new-solider') }}">
            <button> إضافةجندي جديد </button>
        </a>
        <button style="background-color: green">تنزيل PDF </button>
    </div>
    <table>
        <thead>
            <tr>
                <th rowspan="2">م</th>
                <th rowspan="2">درجة</th>
                <th rowspan="2">الرقم العسكري</th>
                <th rowspan="2">الأسم</th>
                <th rowspan="2">الوحدة</th>
                <th rowspan="2">تاريخ الضم</th>
                <th rowspan="2">المؤهل</th>
                <th rowspan="2">التخصص بالوحدة</th>
                <th rowspan="2">السلاح</th>
                <th rowspan="2">تاريخ الميلاد</th>
                <th rowspan="1" colspan="4"> العنوان</th>
                <th rowspan="2">طول</th>
                <th rowspan="2">وزن</th>
                <th rowspan="2">التمام</th>
                <th rowspan="2">تليفون 1</th>
                <th rowspan="2">تليفون 2</th>
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
        @foreach ($officers as $officer)
            <tr>
                <td>{{ $officer->id }} </td>
                <td>{{ $officer->degree }} </td>
                <td>{{ $officer->militray_id }} </td>
                <td>{{ $officer->name }} </td>
                <td>
                    @if ($officer->kateba_id == 1)
                        قيال {{ $officer->kateba->katepa_name }}
                    @else
                        ك {{ $officer->kateba->katepa_name }}
                    @endif
                </td>
                <td>{{ $officer->join_at }} </td>
                <td>{{ $officer->certification }} </td>
                <td>{{ $officer->specialist }} </td>
                <td>{{ $officer->Gun->gun_name }} </td>
                <td>{{ $officer->birthdate }} </td>
                <td>{{ $officer->street }} </td>
                <td>{{ $officer->village }} </td>
                <td>{{ $officer->country }} </td>
                <td>{{ $officer->goverment }} </td>
                <td>{{ $officer->hight }} </td>
                <td>{{ $officer->weight }} </td>
                <td>{{ $officer->tamam }} </td>
                <td>{{ $officer->phone1 }} </td>
                <td>{{ $officer->phone2 }} </td>
                <td>{{ $officer->notes }} </td>
                <td style="text-align: center">
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
        function reset(type) {
            document.getElementById('kateaba_name').value = '';
            document.getElementById('gun').value = '';
        }
    </script>
</div>
