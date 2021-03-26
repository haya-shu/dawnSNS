@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
@csrf
{{ Form::text('username',null,['class' => 'input']) }}

{{ Form::label('メールアドレス') }}
@csrf
{{ Form::text('mail',null,['class' => 'input']) }}

{{ Form::label('パスワード') }}
@csrf
{{ Form::password('password',null,['class' => 'input']) }}

{{ Form::label('パスワード確認') }}
@csrf
{{ Form::password('password-confirm',null,['class' => 'input']) }}

{{ Form::submit('登録') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
