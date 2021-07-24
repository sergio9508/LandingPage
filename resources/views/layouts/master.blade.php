<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body id="app">
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container" >
            @yield('content')
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>