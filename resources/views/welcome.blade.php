<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>MyLibrary</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
    </head>
    <body>
        <header>
            <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand text-white" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link text-white" href="book/create">書籍の入力</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="book/index">書籍管理</a>
                          </li>
                        </ul>
                      </div>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <ul class="navbar-nav ml-auto">
                            @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="text-white" href="{{ url('book/index') }}">ログイン済です</a>
                        @else
                            <a class="text-white mr-3" href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a class="text-white" href="{{ route('register') }}">新規登録</a>
                        @endif
                        @endauth
                    </div>
                @endif
                </div>
            </header>



                 <div class="keyvisual">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{ asset('/images/input4.jpg') }}" style="width: 1200px; height: 590px;"class="d-block w-100 bg-transparent" alt="本の画像">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 class="display-1 text-dark">Input</h5>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/images/insert3.jpg') }}" style="width: 1200px; height: 590px;"class="d-block w-100" alt="入力">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 class="display-1 text-dark">Record</h5>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/images/output.jpg') }}" style="width: 1200px; height: 590px;"class="d-block w-100" alt="出力">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 class="display-1 text-dark">
                              Inspiration</h5>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>


                  <div class="container bg-white py-5 my-5">
                    <div id="column">
                      <h2 class="text-center py-3">How to use</h2>
                    </div>
                      <div class="row">
                        <div class="col-md-4 col-12">
                          <img src="{{ asset('/images/reading.jpg') }}" alt="本を読む少年" style="width: 350px; height:244px;">
                          <h2 class="text-center text-dark">1.本を読む
                          </h2>
                        </div>
                        <div class="col-md-4 col-12">
                          <img src="{{ asset('/images/output2.jpeg') }}" alt="アウトプット" style="width: 350px; height:244px;">
                          <h2 class="text-center text-dark">2.内容をアウトプット
                          </h2>
                        </div>
                        <div class="col-md-4 col-12">
                          <img src="{{ asset('/images/input2.jpg') }}" alt="繰り返し" style="width: 350px; height:244px;">
                          <h2 class="text-center text-dark">３.繰り返す
                          </h2>
                        </div>

                      </div>

                      <div id="colum">
                          <h2 class="text-center py-3 my-3">アウトプットの重要性</h2>
                      </div>
                      <div class="d-flex flex-wrap-reverse justyfy-content-center">
                          <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
                            アウトプットの効果の一つは知識を定着させることです。<br> 脳の海馬では、2～4週間に渡って情報を保存します。 <br>この期間にアウトプットにより、何度も情報を引き出すことで、脳は重要な情報だと判断し、側頭葉に長期記憶として刻まれることになるのです。<br> 知識を定着させるためには「2週間に3回はアウトプット」する必要があります
                          </div>
                          <div class="col-md-6 col-12 p-0 align-self-center">
                            <img class="img-flued" src="{{ asset('/images/inputt.jpg')}}" style="width:555px; height:455px;">
                          </div>

                      </div>

                  </div>


                  <form method="GET" action="{{route('book.index')}}">
                  <button type="submit" class="btn btn-success btn-lg btn-block mb-5" style="width: 300px; height: 60px; margin:auto; border-radius: 20px;"  value="サービスを開始する">サービスを開始する</button>
                 </form>

                    <footer>
                    <div class="bg-dark text-white text-center p-3">
                        Copyright - takashi tomii, 2020
                    </div>

                    </footer>




        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            {{-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
