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

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    本の情報を入力して下さい
                    <form method="POST" action="{{route('book.store')}}">
                        @csrf
                        タイトル<br>
                        <input type="text" name="title">
                        <br>
                        著者<br>
                        <input type="text" name="author">
                        <br>
                        コメント　　(活かしていきたいもの、最も良かったところなど)<br>
                        <textarea name="comment" style="heght:200px; width:500px;"></textarea>
                        <br>

                        <input class="btn btn-info" type="submit" value="本を登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
