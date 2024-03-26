<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">
    <title> {{ env('APP_NAME') }} | @yield('title-content')</title>

    @vite('resources/js/app.js')
</head>

<body>

    @include('partial.header')

    @yield('main-content')

    @include('partial.footer')

    @yield('modal')
</body>

</html>