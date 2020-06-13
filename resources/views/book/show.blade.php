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
    <div class="show-main" style="background-image: url({{ asset('images/login-back9.jpg') }});">

        <div class="show-wrapper">
            <h2 class="show-title">入力内容の確認</h2>
        </div>



        <div class="show-items">
            <div class="show-item">
            <p><span class="show-span">タイトル:</span>
           {{ $book->title}}</p>
            <p><span class="show-author mr-5">著者:</span>
           {{ $book->author}}</p>
            <p><span class="show-comment mr-3">コメント:</span>
       {{ $book->comment}}</p>






            <form method="GET" action="{{route('book.edit', ['id'=> $book->id])}}">
                @csrf
                <input class="btn btn-info show-btn mb-3" type="submit" value="変更する">
              </form>

            <form method="POST" action="{{route('book.destroy', ['id'=> $book->id])}}" id="delete_{{$book->id}}">
                @csrf
                <a href="#" class="btn btn-danger btn-red show-btn2" data-id="{{ $book->id}}" onclick="deletePost(this);">削除する</a>
            </form>
        </div>


    </div>




 </div>
    <script>

        function deletePost(e){
            'use strict';
            if(confirm('本当に削除していいですか？')){
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>

</body>
</html>














{{-- @extends('layouts.app')

@section('content')
<div class="container show-content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <div class="card-header">入力内容の確認</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="my-3 py-3 h4">タイトル:
                    <span class="mx-4">{{ $book->title}}</span><br></p>
                    <p class="my-3 py-3 h4">著者:
                    <span class="mx-4">{{ $book->author}}</span><br></p>
                    <p class="my-3 py-3 h4">コメント:
                     <span class="mx-4">{{ $book->comment}}</span><br></p>
                     <div style="display:flex;">
                        <form method="GET" action="{{route('book.edit', ['id'=> $book->id])}}">
                        @csrf
                        <input class="btn btn-info btn-lg" type="submit" value="変更する">
                      </form>

                    <form method="POST" action="{{route('book.destroy', ['id'=> $book->id])}}" id="delete_{{$book->id}}">
                    @csrf
                    <a href="#" class="btn btn-danger mx-3 btn-lg" data-id="{{ $book->id}}" onclick="deletePost(this);">削除する</a>
                    </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function deletePost(e){
        'use strict';
        if(confirm('本当に削除していいですか？')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>



@endsection --}}
