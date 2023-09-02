<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Officers</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            direction: rtl;
        }

        #depaga {
            position: absolute;
            right: 0%;
            top: 0%;
        }

        #logo {
            position: absolute;
            top: 0%;
            left: 0%;
        }

        span {
            font-weight: bold;
            text-decoration: underline;
            font-size: 10px;
            margin: 5px;
            display: block;
        }

        #officer-card {
            padding: 10px;
            border: 1px dashed black;
            direction: rtl;
            text-align: center;
            font-size: 15px;
        }

        #header {
            position: relative;
        }

        #officer-data span {
            text-decoration: none;
            display: inline
        }

        table {
            text-align: center;
            width: 100%;
            direction: rtl
        }

        td {
            text-align: right;
            line-height: 15px
        }

        #officer-data {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div id="officer-card">
        <div id="header">
            <div id="depaga">
                {{-- <span> قــوات الدفــــاع الجـــوي </span> --}}
                <span> الــفــرقـة الـعـاشـرة دجــو</span>
                <span>قيادة الـلــــواء 21 إنـــذار </span>
                <span> الـــتـــاريــخ: {{ date('d-m-Y')}}</span>
            </div>
            <div id="logo">
            <img src="{{ public_path() . '/icon.png' }}" alt="logo" width="70px" height="70px">
        </div>
        </div>
        <div id="officer-data">
            <h3 style="text-decoration: underline">كارت بيانات ضابط</h3>
            <table>
                <tr>
                    <td><span>
                        {{ Str::reverse($officer->kateba->katepa_name) }}
                        @if ($officer->kateba_id == 1)
                            قيال
                        @else
                            ك
                        @endif
                        الوحدة:
                    </span> </td>
                    <td><span>الأسم: {{ $officer->name }}</span></td>
                    <td><span>الرتبة: {{ $officer->degree }}</span></td>
                    <td><span>رقم الأقدمية: {{ $officer->old_id }}</span></td>
                    <td><span>الرقم العسكري: {{ $officer->militray_id }}</span></td>
                </tr>
                <tr>
                    <td><span> تاريخ الإنضمام: {{ $officer->join_at }}</span> </td>
                    <td><span>الوظيفة: {{ $officer->job }}</span> </td>
                    <td><span>الكلية: {{ $officer->university }}</span></td>
                    <td><span>التخصص: {{ $officer->specialist }}</span></td>
                    <td><span>فئة الضابط: {{ $officer->officer_type }}</span></td>
                </tr>
                <tr>
                    <td><span>السلاح: {{ $officer->gun->gun_name }}</span></td>
                    <td><span>رقم الدفعة: {{ $officer->gun_number }}</span></td>
                    <td><span>تاريخ الميلاد: {{ $officer->birthdate }}</span></td>
                    <td><span>الطول: {{ $officer->hight }}</span></td>
                    <td><span>الوزن: {{ $officer->weight }}</span></td>
                </tr>
                <tr>
                    <td><span>محافظة: {{ $officer->goverment }}</span></td>
                    <td><span>مدينة: {{ $officer->country }}</span></td>
                    <td><span>قرية: {{ $officer->village }}</span></td>
                    <td><span>شارع: {{ $officer->street }}</span></td>
                    <td>
                        <span> العنوان:------------------ </span>
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td><span>الملاحظات: {{ $officer->notes }}</span></td>
                    <td><span>تليفون 2: {{ $officer->phone2 }}</span></td>
                    <td><span>تليفون 1: {{ $officer->phone1 }}</span></td>
                </tr>
                 <tr style="text-align: center">
                    <td> </td>
                    <td><span>الصورة الشخصية: </span>
                        <br />
                        @if ($officer->image != null)
                            <img src="{{ public_path() . '/images/officers/' . $officer_image }}" width="200" height="120" />
                        @endif
                    </td>
                     <td><span>صورة البطاقة: </span>
                        <br />
                        @if ($officer->id_image != null)
                            <img src="{{  public_path() . '/images/officers_id_images/' . $id_image }}" width="200" height="120" />
                        @endif
                    </td>

                    <td><span>صورة الكارنية: </span>
                        <br />
                        @if ($officer->militray_image != null)
                            <img src="{{  public_path() . '/images/officers_militray_images/' . $militray_image }}" width="200" height="120" />
                        @endif
                    </td>
                </tr> 
                <tr> </tr>
                <tr>
                    <td> يعتمد,,, </td>
                </tr>
                <tr> </tr>
                <tr> </tr>
            </table>
        </div>
    </div>
</body>

</html>
