@extends('layouts.app')

@section('content')
<div class="container" id="index">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">書籍一覧表示</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('book.create') }}">
                        <button type="submit" class="btn btn-primary my-3">
                            本を登録
                        </button>
                    </form>

                    <form method="GET" action="{{route('book.index')}}" class="form-inline my-2">
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="著者名" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">著者を検索する</button>
                      </form>

                    <table class="table my-3">
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

                    {{$books->links() }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

