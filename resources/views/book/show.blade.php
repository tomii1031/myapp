@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    タイトル:{{ $book->title}}<br>
                    著者:{{ $book->author}}<br>
                    コメント:{{ $book->comment}}

                    <form method="GET" action="{{route('book.edit', ['id'=> $book->id])}}">
                        @csrf


                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>
                    <form method="POST" action="{{route('book.destroy', ['id'=> $book->id])}}" id="delete_{{$book->id}}">
                    @csrf
                    <a href="#" class="btn btn-danger" data-id="{{ $book->id}}" onclick="deletePost(this);">削除する</a>
                    </form>


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
