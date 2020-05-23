@extends('layouts.app')

@section('content')
<div class="container" id="create">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">書籍を入力</div>

                <div class="card-body" style="height: 600px;">
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

                    <h3 class="my-3">本の情報を入力して下さい</h3>
                    <form method="POST" action="{{route('book.store')}}" class="h-100">
                        @csrf
                        タイトル<br>
                        <input type="text" name="title" class="w-50 mb-3">
                        <br>
                        著者<br>
                        <input type="text" name="author" class="w-50 mb-3">
                        <br>
                        コメント<span class="text-muted">(活かしていきたいもの、最も良かったところなど)</span><br>
                        <textarea name="comment" class="w-75 h-50"></textarea>
                        <br>


                        <input class="btn btn-info btn-lg my-3" type="submit" value="本を登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
