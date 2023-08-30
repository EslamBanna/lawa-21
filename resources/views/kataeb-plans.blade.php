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

    thead {
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

    #download-btn {
        background-color: green;
        padding: 10px;
        font-weight: bold;
        font-size: 20px;
        border: 0px;
        color: white;
        margin-bottom: 10px;
    }

    #download-btn:hover {
        cursor: pointer;
    }
</style>
<div id="plans">
    <h1 style="text-align: center">إلتزامات الكتائب</h1>
    <div style="text-align: center">
        <a href="{{ url('/') }}">
            <button id="download-btn">تنزيل PDF </button>
        </a>
    </div>
    <table>
        <thead>
            <th colspan="8"> قيال ٢١</th>
        </thead>
        <tr>
            <td colspan="1" class="title"> م </td>
            <td colspan="1" class="title"> نوع الإلتزام</td>
            <td colspan="1" class="title"> الموضوع </td>
            <td colspan="1" class="title"> بداية الألتزام </td>
            <td colspan="1" class="title"> نهاية الإلتزام </td>
            <td colspan="1" class="title"> الملاحظات </td>
            <td colspan="1" class="title"> المرفقات </td>
            <td colspan="1" class="title"> العمليات </td>
        </tr>
        {{-- l21 --}}

        @foreach ($data[0] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1">
                    @if (isset($plan_lawa->plan->type_of_plan) && $plan_lawa->plan->type_of_plan == 'مخطط مرور القائد')
                    مرور القائد علي الكتيبة
                    @else
                    {!! $plan_lawa->plan->subject ?? '' !!} </td>
                    @endif
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank">مرفق {{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/'. $plan_lawa->plan_id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{ url('/delete-plan/'. $plan_lawa->plan_id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach
        {{-- k43 --}}
        <thead>
            <th colspan="8">كـ ٤٣</th>
        </thead>
        @foreach ($data[2] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank">مرفق {{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/'. $plan_lawa->plan_id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{ url('/delete-plan/'. $plan_lawa->plan_id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach

        {{-- k41 --}}
        <thead>
            <th colspan="8">كـ ٤١</th>
        </thead>
        @foreach ($data[1] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank"> مرفق{{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/'. $plan_lawa->plan_id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{  url('/delete-plan/'. $plan_lawa->plan_id)  }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach

        {{-- k44 --}}
        <thead>
            <th colspan="8">كـ ٤٤</th>
        </thead>
        @foreach ($data[3] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank">مرفق {{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/'. $plan_lawa->plan_id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{  url('/delete-plan/'. $plan_lawa->plan_id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach

        {{-- k74 --}}
        <thead>
            <th colspan="8">كـ ٧٤</th>
        </thead>
        @foreach ($data[6] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank">مرفق {{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/'. $plan_lawa->plan_id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{ url('/delete-plan/'. $plan_lawa->plan_id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach

        {{-- k69 --}}
        <thead>
            <th colspan="8">كـ ٦٩</th>
        </thead>
        @foreach ($data[5] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank">مرفق {{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/'. $plan_lawa->plan_id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{  url('/delete-plan/'. $plan_lawa->plan_id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach

        {{-- k79 --}}
        <thead>
            <th colspan="8">كـ ٧٩</th>
        </thead>
        @foreach ($data[7] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank">مرفق {{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/'. $plan_lawa->plan_id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{  url('/delete-plan/'. $plan_lawa->plan_id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach
        
        {{-- k68 --}}
        <thead>
            <th colspan="8">كـ ٦٨</th>
        </thead>
        @foreach ($data[4] as $index => $plan_lawa)
            <tr>
                <td colspan="1"> {{ $index }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->type_of_plan ?? '' }} </td>
                <td colspan="1"> {!! $plan_lawa->plan->subject ?? '' !!} </td>
                <td colspan="1"> {{ $plan_lawa->plan->start_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->end_plan ?? '' }} </td>
                <td colspan="1"> {{ $plan_lawa->plan->notes ?? '' }} </td>
                <td colspan="1">
                    @isset($plan_lawa->plan->attachments)
                        @foreach ($plan_lawa->plan->attachments as $index => $attach)
                            <a href="{{ $attach->attach }}" target="_blank"> مرفق {{ $index }} </a>
                            <br />
                        @endforeach
                    @endisset

                </td>
                <td colspan="1">
                    <a href="{{ url('/update-plan/' . $plan_lawa->id) }}">
                        <button class="update-btn">تعديل</button>
                    </a>
                    <a href="{{  url('/delete-plan/'. $plan_lawa->plan_id) }}">
                        <button class="delete-btn">حذف</button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
</div>
