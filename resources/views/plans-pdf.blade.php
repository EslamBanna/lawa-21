<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Plans</title>
    <style>
        #content {
            direction: rtl;
            text-align: center
        }

        tr,
        td,
        th,
        table {
            border: 1px solid black;
            direction: rtl;
        }

        td,
        th {
            padding: 5px;
            text-align: center
        }

        thead {
            background-color: rgb(63, 58, 58);
            color: white;
        }

        table {
            width: 100%;
        }

        * {
            font-family: DejaVu Sans, sans-serif;
            direction: rtl;
            font-size: 8px
        }
    </style>
</head>

<body>
    <div id="content">
        <div id="intro" style="text-align: center">
            <h1 style="font-size: 20px"> الإلتزامات</h1>
        </div>

        <div id="tabel">
            <table>
                <thead>
                    <th>م</th>
                    <th>نوع الإلتزام</th>
                    <th>الإلتزام</th>
                    <th>بداية </th>
                    <th>نهاية </th>
                    <th>إختصاص</th>
                    <th>الملاحظات</th>
                </thead>
                @foreach ($plans as $index => $plan)
                    <tr>
                        <td> {{ Str::reverse(Numbers::ShowInArabicDigits(++$index)) }} </td>
                        <td> {{ $plan->type_of_plan }} </td>
                        <td> {!! $plan->subject !!} </td>
                        <td> {{ Str::reverse(Numbers::ShowInArabicDigits($plan->start_plan)) }} </td>
                        <td>
                            @if ($plan->end_plan == null)
                                -
                            @else
                                {{ Str::reverse(Numbers::ShowInArabicDigits($plan->end_plan)) }}
                            @endif
                        </td>
                        <td>
                            @foreach ($plan->kataeabs as $kateba)
                                @if ($kateba->katepa->id < 8)
                                    {{ Str::reverse($kateba->katepa->katepa_name) }},
                                @else
                                    {{ $kateba->katepa->katepa_name }},
                                @endif
                                <br />
                            @endforeach
                        </td>
                        <td>
                            @if ($plan->notes == null)
                                -
                            @else
                                {{ $plan->notes }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
</body>

</html>
