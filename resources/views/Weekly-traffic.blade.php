<style>
    #start_week,
    #end_week {
        padding: 15px;
        text-align: center;
        margin-bottom: 10px
    }

    #form-data {
        direction: rtl
    }

    .input-plan {
        margin-bottom: 10px;
        padding: 15px;
    }

    #content {
        margin-top: 250px;
    }


    td {
        padding: 30px;
    }

    .day {
        font-weight: bold;
        font-size: 20px;
        text-decoration: underline;
    }

    #katepa {
        margin-bottom: 15px;
        /* padding: 20px */
    }

    .btn-save-traffic {
        padding: 15px;
        border: 0px;
        background-color: rgb(73, 141, 73);
        width: 100px;
        color: white;
        font-size: 20px
    }

    .btn-save-traffic:hover {
        cursor: pointer;
    }
</style>
@extends('layouts.general-layout')
@section('content')
    <div id="content">
        <div id="form-data">
            <form action="{{ url('/save-traffic-plan') }}" method="POST">
                @csrf

                <div id="add-weekly-traffic" style="direction: rtl">
                    <h1>مخطط مرور القائد عن الفترة من</h1>
                    <input type="date" name="start_week" id="start_week" required />
                    إلى
                    <input type="date" name="end_week" id="end_week" required />
                    <br />
                    <textarea name="notes" id="notes"> ملاحظات</textarea>
                </div>
                <table style="text-align: center">
                    <tr>
                        <td>
                            <label class="day"> السبت </label>
                            <br />
                            <br />
                            @foreach ($kataebs as $kataeb)
                                @if ($kataeb->id == 1)
                                    <label> قيال {{ $kataeb->katepa_name }}</label>
                                @elseif ($kataeb->id <= 8)
                                    <label> ك{{ $kataeb->katepa_name }}</label>
                                @else
                                    <label> {{ $kataeb->katepa_name }}</label>
                                @endif
                                <input type="checkbox" name="saturday{{ $kataeb->id }}" value="{{ $kataeb->id }}"
                                    id="katepa" />
                                <br>
                            @endforeach
                        </td>
                        <td>
                            <label class="day"> الأحد </label>
                            <br />
                            <br />
                            @foreach ($kataebs as $kataeb)
                                @if ($kataeb->id == 1)
                                    <label> قيال {{ $kataeb->katepa_name }}</label>
                                @elseif ($kataeb->id <= 8)
                                    <label> ك{{ $kataeb->katepa_name }}</label>
                                @else
                                    <label> {{ $kataeb->katepa_name }}</label>
                                @endif <input type="checkbox" id="katepa"
                                    name="sunday{{ $kataeb->id }}" value="{{ $kataeb->id }}" />
                                <br>
                            @endforeach
                        </td>

                        <td>
                            <label class="day"> الأثنين </label>
                            <br />
                            <br />
                            @foreach ($kataebs as $kataeb)
                                @if ($kataeb->id == 1)
                                    <label> قيال {{ $kataeb->katepa_name }}</label>
                                @elseif ($kataeb->id <= 8)
                                    <label> ك{{ $kataeb->katepa_name }}</label>
                                @else
                                    <label> {{ $kataeb->katepa_name }}</label>
                                @endif <input type="checkbox" name="monday{{ $kataeb->id }}"
                                    value="{{ $kataeb->id }}" id="katepa" />
                                <br>
                            @endforeach
                        </td>

                        <td>
                            <label class="day"> الثلاثاء </label>
                            <br />
                            <br />
                            @foreach ($kataebs as $kataeb)
                                @if ($kataeb->id == 1)
                                    <label> قيال {{ $kataeb->katepa_name }}</label>
                                @elseif ($kataeb->id <= 8)
                                    <label> ك{{ $kataeb->katepa_name }}</label>
                                @else
                                    <label> {{ $kataeb->katepa_name }}</label>
                                @endif <input type="checkbox" name="tuesday{{ $kataeb->id }}"
                                    value="{{ $kataeb->id }}" id="katepa" />
                                <br>
                            @endforeach
                        </td>

                        <td>
                            <label class="day"> الأربعاء </label>
                            <br />
                            <br />
                            @foreach ($kataebs as $kataeb)
                                @if ($kataeb->id == 1)
                                    <label> قيال {{ $kataeb->katepa_name }}</label>
                                @elseif ($kataeb->id <= 8)
                                    <label> ك{{ $kataeb->katepa_name }}</label>
                                @else
                                    <label> {{ $kataeb->katepa_name }}</label>
                                @endif <input type="checkbox" name="wednesday{{ $kataeb->id }}"
                                    value="{{ $kataeb->id }}" id="katepa" />
                                <br>
                            @endforeach
                        </td>


                        <td>
                            <label class="day"> الخميس </label>
                            <br />
                            <br />
                            @foreach ($kataebs as $kataeb)
                                @if ($kataeb->id == 1)
                                    <label> قيال {{ $kataeb->katepa_name }}</label>
                                @elseif ($kataeb->id <= 8)
                                    <label> ك{{ $kataeb->katepa_name }}</label>
                                @else
                                    <label> {{ $kataeb->katepa_name }}</label>
                                @endif <input type="checkbox" name="tharsday{{ $kataeb->id }}"
                                    value="{{ $kataeb->id }}" id="katepa" />
                                <br>
                            @endforeach
                        </td>
                    </tr>
                </table>


                <button type="submit" class="btn-save-traffic"> حفظ</button>
            </form>
        </div>
    </div>
    <script>
        function play(day, kataeb_id) {
            if (document.getElementById(day).value == '') {
                document.getElementById(day).value = kataeb_id;
            } else {
                document.getElementById(day).value = document.getElementById(day).value + '-' + kataeb_id;
            }
        }
    </script>

@stop
