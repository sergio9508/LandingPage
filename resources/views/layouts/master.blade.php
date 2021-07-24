<html>

<head>
    <title>App Name - @yield('title')</title>
</head>

<body id="app">
    @section('sidebar')
        This is the master sidebar.
    @show


    @yield('content')
</body>
<script src="{{ mix('/js/app.js') }}"></script>

</html>
