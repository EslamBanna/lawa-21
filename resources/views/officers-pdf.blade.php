<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
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
    </style>
</head>

<body>
    <div id="tempalte">
        <div id="intro" style="text-align: center">
            <h1>قاعدة بيانات ضباط اللواء ٢١ إنذار</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th rowspan="2">م</th>
                    <th rowspan="2">رتبة</th>
                    <th rowspan="2">الرقم العسكري</th>
                    <th rowspan="2">رقم الأقدمية</th>
                    <th rowspan="2">الأسم</th>
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
                    <th rowspan="2">تليفون 1</th>
                    <th rowspan="2">تليفون 2</th>
                    <th rowspan="2">الملاحظات</th>
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
                    <td>{{ $officer->old_id }} </td>
                    <td>{{ $officer->name }} </td>
                    <td>
                        @if ($officer->kateba_id == 1)
                            قيال {{ $officer->kateba->katepa_name }}
                        @else
                            ك {{ $officer->kateba->katepa_name }}
                        @endif


                    </td>
                    <td>{{ $officer->join_at }} </td>
                    <td>{{ $officer->university }} </td>
                    <td>{{ $officer->job }} </td>
                    <td>{{ $officer->specialist }} </td>
                    <td>{{ $officer->officer_type }} </td>
                    <td>{{ $officer->Gun->gun_name }} </td>
                    <td>{{ $officer->gun_number }} </td>
                    <td>{{ $officer->birthdate }} </td>
                    <td>{{ $officer->street }} </td>
                    <td>{{ $officer->village }} </td>
                    <td>{{ $officer->country }} </td>
                    <td>{{ $officer->goverment }} </td>
                    <td>{{ $officer->hight }} </td>
                    <td>{{ $officer->weight }} </td>
                    <td>{{ $officer->phone1 }} </td>
                    <td>{{ $officer->phone2 }} </td>
                    <td>{{ $officer->notes }} </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
