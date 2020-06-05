<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://unpkg.com/ress/dist/ress.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">




    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
    <header class="page-header" style="position: fixed;">
        <nav>
            <ul class="main-nav">
                <li class="app-name menu h4 ml-3"><a href="{{ url('/') }}">MyLibrary</a></li>
                <li class="menu ml-5"><a href="index">書籍の一覧</a></li>
                <li class="menu ml-5"><a href="create">書籍の入力</a></li>
                <li class="menu ml-5"><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
    @yield('main-content')
</div>


