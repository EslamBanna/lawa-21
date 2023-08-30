<!DOCTYPE html>

<html lang="">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إضافة إلتزام جديد</title>
    @include('Components.tinymce-config')
    <style>
        #add-plan {
            direction: rtl
        }

        #intro {
            margin-bottom: 50px
        }

        .input {
            width: 200px;
            padding: 10px
        }

        #notes {
            resize: none;
            /* width: 500px; */
            margin-top: 15px;
            margin-bottom: 15px
        }

        #katepa {
            margin-left: 20px;
            margin-top: 20px
        }

        .search-btn {
            background-color: rgb(41, 212, 112);
            padding: 10px;
            border: 0;
            margin-top: 20px;
            /* text-align: center */
        }

        .search-btn:hover {
            cursor: pointer;
        }

        #attch {
            border: 1px solid black;
            padding: 10px
        }

        #spec label {
            font-weight: bold;
        }

        #actions {
            border: 1px solid black;
            padding: 10px
        }
    </style>
</head>

<body>

    <div id="intro" style="text-align: center">
        <h1>إضافة إلتزام جديد</h1>
        <a href="{{ url('/') }}">
            <button> &LeftArrow; العودة الي الصفحة الرئيسية </button>
        </a>
    </div>
    <div id="add-plan">
        <form action="{{ url('/save-update-plan/' . $plan->id) }}" method="POST" enctype="multipart/form-data" style="text-align: center">
            @csrf
            <textarea id="myeditorinstance" name="subject">
                {{ $plan->subject ?? '' }}
            </textarea>
            <br />
            <div id="actions" style="text-align: center">
                <label>نوع الإلتزام </label>
                <select name="type_of_plan" id="type_of_plan" class="input" required>
                    <option value="{{ $plan->type_of_plan }}" selected> {{ $plan->type_of_plan }}</option>
                    <option value="التزام"> التزام</option>
                    <option value="مرور"> مرور</option>
                    <option value="تحركات"> تحركات</option>
                    <option value="تعليمات"> تعليمات</option>
                    <option value="مخطط مرور القائد"> 'مخطط مرور القائد</option>
                </select>
                <label> من </label>
                <input type="date" name="start_plan" id="start_plan" class="input"
                    value="{{ $plan->start_plan }}" required/>
                <label> الي </label>
                <input type="date" name="end_plan" id="end_plan" class="input" value="{{ $plan->end_plan }}" required/>
                <br />
                <?php
                $val = false;
                ?>
                <div id="spec" style="text-align: center">
                    <label> إختصاص:-</label>
                    @foreach ($kataebs as $kateba)
                        @if ($kateba->id == 1)
                            <label> قيال {{ $kateba->katepa_name }}</label>
                        @elseif ($kateba->id <= 8)
                            <label> ك{{ $kateba->katepa_name }}</label>
                        @else
                            <label> {{ $kateba->katepa_name }}</label>
                        @endif
                        @foreach ($plan->kataeabs as $kataeab)
                            @if ($kataeab->kateapa_id == $kateba->id)
                                <?php
                                $val = true;
                                ?>
                            @break
                        @endif
                    @endforeach
                    @if ($val == true)
                        <input type="checkbox" name="special{{ $kateba->id }}" value="{{ $kateba->id }}"
                            id="katepa" checked />
                        -
                    @else
                        <input type="checkbox" name="special{{ $kateba->id }}" value="{{ $kateba->id }}"
                            id="katepa" />
                        -
                    @endif
                    <?php
                    $val = false;
                    ?>
                @endforeach
            </div>
            <label> الملاحظات </label>
            <br />
            <textarea id="notes" cols="100" placeholder="الملاحظات"> {{ $plan->notes }}</textarea>
            <br />
            
            <div id="old-attchs">
                @foreach ($plan->attachments as $index=> $attach)
                    <a href="{{ $attach->attach }}" target="_blank">مرفق {{ $index }}  </a>
                    ,
                @endforeach
            </div>

            <label>اضافة مؤيدات </label>
            <input type="file" name="attachs[]" id="attachs" multiple />
            <br />
        </div>

        <button style="width:100px;" class="search-btn" type="submit"> تعديل </button>

    </form>
</div>

</body>

</html>
