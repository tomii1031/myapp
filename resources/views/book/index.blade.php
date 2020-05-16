@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('book.create') }}">
                        <button type="submit" class="btn btn-primary">
                            本を登録
                        </button>
                    </form>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">タイトル</th>
                            <th scope="col">著者</th>
                            <th scope="col">登録日時</th>
                            <th scope="col">詳細</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                                <tr>
                                <th>{{ $book->id}}</th>
                                <td>{{ $book->title}}</td>
                                <td>{{ $book->author}}</td>
                                <td>{{ $book->created_at}}</td>
                                <td><a href="{{route('book.show',['id'=>$book->id] )}}">詳細をみる</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

