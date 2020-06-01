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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>



<body>
    <div class="login vue" style="background-image: url({{ asset('images/login-back9.jpg') }});  background-size: cover;">
     <header class="page-header">
        <nav>
            <ul class="main-nav">
                <li class="app-name menu h4 ml-3"><a href="{{ url('/') }}">MyLibrary</a></li>
                <li class="menu ml-5"><a href="index">書籍の一覧</a></li>
                <li class="menu ml-5"><a href="create">書籍の入力</a></li>
                <li class="menu ml-5"><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <div class="home-content wrapper">
        <h2 class="page-title">
            There is no meaning unless output
        </h2>
        <p class="sub-title">
            本を読んだら、すぐにアウトプット！知識の定着をサポート!
        </p>
    </div>
    <div class="login-form">
        <form method="POST" class="mt-3" action="{{ route('login') }}">
            @csrf
        <div class="form-mail">
        <h2 class="login-title">{{ __('Login') }}</h2>
        <label class="mr-3 mt-2" for="email">{{ __('メールアドレス') }}</label>
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
        @error('email')
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>
    <div class="form-password">
        <label for="password" class="mr-5 my-2">{{ __('パスワード') }}</label>
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" >
        @error('password')
          <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
              </span>
            @enderror
    </div>
    <div class="form-check">
        {{-- <input class="form-check-input checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}

        {{-- <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label> --}}
        <div class="login-btn">
                <button type="submit" class="btn btn-success">
                    {{ __('ログイン') }}
                </button>

                @if (Route::has('password.request'))
                <p><a class="btn btn-link mt-3" href="{{ route('password.request') }}">
                     {{ __('パスワードを忘れた方はこちら') }}
                    </a></p>
                @endif
    </div>
</div>
</form>

     {{-- <div class="container">

        <div class="col-md-8">

                <div class="card-header bg-warning h3">{{ __('Login') }}</>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
 --}}
</div>


 </body>
 </html>
