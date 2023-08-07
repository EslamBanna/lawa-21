<!doctype html>
<html>

<head>
    @include('Components.Head')
    <style>
        body {
            position: relative;
            font-family: 'Nunito', sans-serif;
        }

        #body {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 70vh;
            box-sizing: border-box;
        }
    </style>
</head>

<body id="body">
    <div class="container">
        <header class="row">
            @include('components.header')
        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('components.footer')
        </footer>
    </div>
</body>

</html>
