<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard - Annual Reports</title>

    @include('components.admin.style')

    @stack('style')

</head>

<body>
    <div id="app">
        @include('components.admin.sidebar')

        <div id="main">
            @include('sweetalert::alert')
            @include('components.admin.header')

            @yield('content')

            @include('components.admin.footer')
        </div>
    </div>

    @include('components.admin.script')

    @stack('script')
</body>

</html>
