<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-full flex flex-col justify-center items-center">
    @include('layouts._partials.menu')
        @yield('content')
    @include('layouts._partials.footer')
</body>
</html>
