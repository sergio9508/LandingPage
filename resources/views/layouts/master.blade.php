<html lang="ES">

    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>

    <body>
        <div id="app">
            @section('sidebar')

            @show


            @yield('content')
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>

</html>
