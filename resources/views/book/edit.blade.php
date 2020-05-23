@extends('layouts.app')

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
@endsection
