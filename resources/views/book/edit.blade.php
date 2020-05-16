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
                    editです
                    <form method="POST" action="{{route('book.update', ['id'=> $book->id])}}">
                    @csrf
                    タイトル<br>
                    <input type="text" name="title" value="{{ $book->title}}">
                    <br>
                    著者<br>
                    <input type="text" name="author" value="{{ $book->author}}">
                    <br>
                    コメント　　(活かしていきたいもの、最も良かったところなど)<br>
                    <textarea name="comment" style="heght:200px; width:500px;">{{ $book->comment}}</textarea>
                    <br>








                        <input class="btn btn-info" type="submit" value="更新する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
