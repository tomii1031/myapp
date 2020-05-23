@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ホーム</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインできました！<br>
                    <form method="GET" action="{{route('book.index')}}">
                　　 <input class="btn btn-info" type="submit" value="サービスを開始する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
