<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/common.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="create-main" style="background-image: url({{ asset('images/edit-back8.jpg') }}); background-size: cover;
    background-color:rgba(255,255,255,0.1); background-blend-mode:lighten;">
    <div class="create-form">
        <h2 class="create-title text-white">書籍の更新</h2>
        @if ($errors->any())
                 <div class="alert alert-danger c-error">
                     <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                      @endforeach
                        </ul>
                 </div>
        @endif

        <form method="POST" action="{{route('book.update', ['id'=> $book->id])}}">
            @csrf
            <div>
                <label class="create-label text-white" for="title">タイトル</label>
                <input class="c-input" type="text" name="title" value="{{ $book->title}}">
            </div>
            <div>
                <label class="create-label text-white" for="author">著者</label>
                <input class="c-input" type="text" name="author" value="{{ $book->author}}">
             </div>
             <div>
                <label class="create-label text-white" for="comment">コメント (活かしていきたいもの、最も良かったところなど)</label>
                <textarea  class="create-textarea" placeholder="（例）ポジティブ思考は大切で、これからの生活に置いても活用していきたい" name="comment">{{ $book->comment}}</textarea>
             </div>

             <input class="btn btn-info btn-lg my-3 c-btn" type="submit" value="更新する">

            </form>


</div>
 </div>






{{-- @extends('layouts.app')

@section('content')
<div class="container" id="edit">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">入力内容の編集</div>

                <div class="card-body" style="height: 600px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('book.update', ['id'=> $book->id])}}" class="h-100">
                    @csrf
                    タイトル<br>
                    <input type="text" name="title" value="{{ $book->title}}" class="w-50 mb-3">
                    <br>
                    著者<br>
                    <input type="text" name="author" value="{{ $book->author}}" class="w-50 mb-3">
                    <br>
                    コメント<span class="text-muted">(活かしていきたいもの、最も良かったところなど)</span><br>
                    <textarea name="comment" class="w-75 h-50">{{ $book->comment}}</textarea>
                    <br>








                        <input class="btn btn-info btn-lg my-3" type="submit" value="更新する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
</body>
</html>
