@extends('layout')
 
@section('title')
Посты
@stop
 
@section('content')
Все посты
@foreach($posts as $post)
    <div class="container-fluid bg-success block_example">
        <div class="row">
            <div class="col-md-2">
                Пользователь: 
            </div>
            <div class="col-md-4">
                {{ $post->username }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                id: 
            </div>
            <div class="col-md-4">
                {{ $post->id }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Дата: 
            </div>
            <div class="col-md-4">
                {{ $post->updated_at }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Название: 
            </div>
            <div class="col-md-4">
                {{ $post->title }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Содержание: 
            </div>
            <div class="col-md-4">
                {{ $post->content }}
            </div>
        </div>

    </div>
@endforeach
@stop