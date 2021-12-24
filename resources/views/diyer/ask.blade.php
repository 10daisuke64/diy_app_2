@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">質問を登録する</div>

        <form class="card-body" action="{{ route('register_question') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">タイトル</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                質問内容：<textarea class="form-control" rows="3" name="body" placeholder="質問を入力してください"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
</div>

@endsection
