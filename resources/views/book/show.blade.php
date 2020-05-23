@extends('layouts.app')

@section('content')
<div class="container">
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



@endsection
