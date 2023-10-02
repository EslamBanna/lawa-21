<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Officers</title>
    <style>
        tr,
        td,
        th,
        table {
            border: 1px solid black;
            direction: rtl
        }

        td,
        th {
            /* padding: 5px */
        }

        thead {
            background-color: rgb(63, 58, 58);
            color: white;
            /* padding: 20px */
        }

        h1 {
            text-align: center
        }

        td {
            text-align: center
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            direction: rtl;
            font-weight: bold;
            font-size: 6px;
            text-align: center;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div id="tempalte">
        <div id="intro" style="text-align: center">
            <h1>قاعدة بيانات جنود اللواء 21 إنذار</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th rowspan="2">الملاحظات</th>
                    <th rowspan="2">تليفون 2</th>
                    <th rowspan="2">تليفون 1</th>
                    <th rowspan="2">وزن</th>
                    <th rowspan="2">طول</th>
                    <th rowspan="1" colspan="4"> العنوان</th>
                    <th rowspan="2">تاريخ الميلاد</th>
                    <th rowspan="2">السلاح</th>
                    <th rowspan="2">التخصص</th>
                    <th rowspan="2">تاريخ الضم</th>
                    <th rowspan="2">المؤهل</th>
                    <th rowspan="2">الوحدة</th>
                    <th rowspan="2" style="width: 150px">الأسم</th>
                    <th rowspan="2">الرقم العسكري</th>
                    <th rowspan="2" style="min-width: 30px">درجة</th>
                    <th rowspan="2">م</th>

                </tr>

                <tr>
                    <th colspan="1">محافظة</th>
                    <th colspan="1">مدينة</th>
                    <th colspan="1">قرية</th>
                    <th colspan="1">شارع</th>
                </tr>

            </thead>
            @foreach ($officers as $index => $officer)
                <tr>
                    <td>{{ Numbers::ShowInArabicDigits($officer->notes) }} </td>
                    <td>{{ Str::reverse(Numbers::ShowInArabicDigits($officer->phone2)) }} </td>
                    <td>{{ Str::reverse(Numbers::ShowInArabicDigits($officer->phone1)) }} </td>
                    <td>{{ Str::reverse(Numbers::ShowInArabicDigits($officer->weight)) }} </td>
                    <td>{{ Str::reverse(Numbers::ShowInArabicDigits($officer->hight)) }} </td>
                    <td>{{ $officer->goverment }} </td>
                    <td>{{ $officer->country }} </td>
                    <td>{{ $officer->village }} </td>
                    <td>{{ Numbers::ShowInArabicDigits($officer->street) }} </td>
                    <td>{{ Numbers::ShowInArabicDigits($officer->birthdate) }} </td>
                    <td>{{ $officer->gun->gun_name }} </td>
                    <td>{{ Numbers::ShowInArabicDigits($officer->specialist) }} </td>
                    <td>{{ Str::reverse(Numbers::ShowInArabicDigits($officer->join_at)) }} </td>
                    <td>{{ $officer->certification }} </td>
                    <td>
                        @if ($officer->kateba_id == 1)
                            قيال {{ Str::reverse($officer->kateba->katepa_name) }}
                        @else
                            ك {{ Str::reverse($officer->kateba->katepa_name) }}
                        @endif
                    </td>
                    <td>{{ $officer->name }} </td>
                    <td lang="ar">{{ Str::reverse(Numbers::ShowInArabicDigits($officer->militray_id)) }} </td>
                    <td>{{ $officer->degree }} </td>
                    <td>{{ Str::reverse(Numbers::ShowInArabicDigits($index + 1)) }} </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
