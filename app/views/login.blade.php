<!-- app/views/login.blade.php -->
@extends('layout')
 
@section('title')
Логин
@stop
 
@section('content')
    {{ Session::get('message') }}
    {{ Form::open(array('url' => 'login')) }}
    <h1>Вход</h1>

    <!-- if there are login errors, show them here -->
    <p>
        {{ $errors->first('username', 'Поле логина не может быть пустым!') }}
    </p>

    <p>
        {{ Form::label('username', 'Логин') }}
        {{ Form::text('username', Input::old('username'), array('placeholder' => 'login')) }}
    </p>
    <p>
        {{ $errors->first('password', 'Поле пароля не может быть пустым!') }}       
    </p>
    <p>
        {{ Form::label('password', 'Пароль') }}
        {{ Form::password('password') }}
    </p>

    <p>{{ Form::submit('Вход!') }}</p>
    {{ Form::close() }}

@stop




