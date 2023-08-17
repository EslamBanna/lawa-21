<style>
    #content {
        direction: rtl;
        text-align: center
    }

    #intro {
        margin-bottom: 20px
    }

    input {
        padding: 10px;
        text-align: center
    }

    .search-btn,
    .download-btn {
        background-color: rgb(41, 212, 112);
        padding: 10px;
        border: 0
    }

    .search-btn:hover,
    .download-btn:hover {
        cursor: pointer;
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
        padding: 10px;
        text-align: center
    }

    thead {
        background-color: rgb(63, 58, 58);
        color: white;
    }

    th:nth-of-type(2) {
        width: 50px;
    }

    th:nth-of-type(3) {
        width: 1000px;
    }

    th:nth-of-type(6) {
        width: 10px;
    }

    .download-btn {
        background-color: blueviolet
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

    #filter {
        padding: 20px;
        border: 1px solid black;
        margin-bottom: 50px
    }
</style>
<div id="content">
    <div id="intro" style="text-align: center">
        <h1>جميع الإلتزامات</h1>
        <a href="{{ url('/') }}">
            <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
        </a>
    </div>
    <div id="filter">
        <form action="{{ url('/filter-plans') }}" method="POST">
            @csrf
            <input type="date" name="start" id="plans_from" placeholder="بداية" required />
            إلى
            <input type="date" name="end" id="plans_to" placeholder="نهاية" />
            <button style="width:100px;" class="search-btn" type="submit"> البحث </button>
            <button style="width:100px;" class="download-btn" type="submit"> تنزيل PDF </button>
        </form>
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
                <th>المرفقات</th>
                <th>الملاحظات</th>
                <th>عمليات</th>
            </thead>
            @foreach ($plans as $index => $plan)
                <tr>
                    <td> {{++ $index }} </td>
                    <td> {{ $plan->type_of_plan }} </td>
                    <td> {!! $plan->subject !!} </td>
                    <td> {{ $plan->start_plan }} </td>
                    <td>
                        @if ($plan->end_plan == null)
                            -
                        @else
                            {{ $plan->end_plan }}
                        @endif
                    </td>
                    <td>
                        @foreach ($plan->kataeabs as $kateba)
                            {{ $kateba->katepa->katepa_name }},
                        @endforeach
                    </td>
                    <td>
                        @foreach ($plan->attachments as $index => $attachment)
                            <a href="{{ $attachment->attach }}" target="_blank"> مرفق {{++ $index }}</a>
                        @endforeach    
                    </td>
                    <td>
                        @if ($plan->notes == null)
                            -
                        @else
                            {{ $plan->notes }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/delete-officer/' . $plan->id) }}">
                            <button class="delete-btn">حذف</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</div>
