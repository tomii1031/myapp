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
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="login vue" style="background-image: url({{ asset('images/login-back9.jpg') }}); background-size:cover;">
    <header class="page-header">
        <nav>
            <ul class="main-nav">
                <li class="app-name menu h4 ml-3"><a href="{{ url('/') }}">MyLibrary</a></li>
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

    <div class="register-form">
        <div class="register-title">{{ __('新規登録') }}
        </div>
        <form method="POST" class="mt-3" action="{{ route('register') }}">
            @csrf


        <div class="form-name">
         <label for="name" class="mr-4 my-3">{{ __('ニックネーム') }}</label>
         <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
         @error('name')
          <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
          </span>
         @enderror
        </div>


        <div class="form-email">
            <label for="email" class="mr-3 my-3">{{ __('メールアドレス') }}</label>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('name')
            <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
            </span>
               @enderror
        </div>


        <div class="form-password">
            <label for="password" class="mr-5 my-3">{{ __('パスワード') }}</label>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
              <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>

        <div class="form-password-confirm">
            <label for="password-confirm" class="mr-5 my-3">{{ __('パスワード') }}</label>
            <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="register-btn">
            <button type="submit" class="btn btn-primary">
                {{ __('新規登録する') }}
            </button>
        </div>

    </div>
</form>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h3 bg-success">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
</div>
</body>
</html>
