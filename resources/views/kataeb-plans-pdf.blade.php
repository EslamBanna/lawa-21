<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Plans Kataeb</title>
    <style>
        td {
            text-align: center
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

        .theadd {
            background-color: rgb(63, 58, 58);
            color: white;
            /* padding: 20px */
        }

        table {
            width: 100%
        }

        .title {
            background-color: rgb(27, 221, 69);
            font-weight: bold;
        }
        * {
            font-family: DejaVu Sans, sans-serif;
            direction: rtl;
            font-size: 8px
        }
    </style>
</head>

<body>
    <div id="plans">
        <h1 style="text-align: center">إلتزامات الكتائب</h1>
        <table>
            <tr>
                <td colspan="6" class="theadd"> قيال 21</td>
            </tr>
            <tr>
                <td colspan="1" class="title"> م </td>
                <td colspan="1" class="title"> نوع الإلتزام</td>
                <td colspan="1" class="title"> الموضوع </td>
                <td colspan="1" class="title"> بداية الألتزام </td>
                <td colspan="1" class="title"> نهاية الإلتزام </td>
                <td colspan="1" class="title"> الملاحظات </td>
            </tr>
            {{-- l21 --}}

            @foreach ($data[0] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1">
                        @if (isset($plan_lawa->plan->type_of_plan) && $plan_lawa->plan->type_of_plan == 'مخطط مرور القائد')
                            مرور القائد علي الكتيبة
                        @else
                            {!! $plan_lawa->plan->subject ?? '' !!}
                    </td>
            @endif
            <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
            <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
            <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
            </tr>
            @endforeach
            {{-- k43 --}}
            <tr>
                <th colspan="6" class="theadd">كـ 43</th>
            </tr>
            @foreach ($data[2] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                </tr>
            @endforeach

            {{-- k41 --}}
            <tr>
                <th colspan="6" class="theadd">كـ 41</th>
            </tr>
            @foreach ($data[1] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                </tr>
            @endforeach

            {{-- k44 --}}
            <tr>
                <th colspan="6" class="theadd">كـ 44</th>
            </tr>
            @foreach ($data[3] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                </tr>
            @endforeach

            {{-- k74 --}}
            <tr>
                <th colspan="6" class="theadd">كـ 74</th>
            </tr>
            @foreach ($data[6] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                </tr>
            @endforeach

            {{-- k69 --}}
            <tr>
                <th colspan="6" class="theadd">كـ 69</th>
            </tr>
            @foreach ($data[5] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                </tr>
            @endforeach

            {{-- k79 --}}
            <tr>
                <th colspan="6" class="theadd">كـ 79</th>
            </tr>
            @foreach ($data[7] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                </tr>
            @endforeach

            {{-- k68 --}}
            <tr>
                <th colspan="6" class="theadd">كـ 68</th>
            </tr>
            @foreach ($data[4] as $index => $plan_lawa)
                <tr>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits(++$index) }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                    <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->start_plan) ?? '' }} </td>
                    <td colspan="1"> {{ Numbers::ShowInArabicDigits($plan_lawa->plan->end_plan) ?? '' }} </td>
                    <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
