@extends('layout_man')

@section('title')
Просмотр поста
@stop
@section('content')
<div class="block_example bg-success">
    
    <p>ID:{{ $post->id }}</p>
    <p>Дата: {{ $post->created_at }}</p>
    <p>
        Название : {{ $post->title }}
    </p>
    <p>
        Содержание: {{ $post->content }}  
    </p>
    
</div>
@stop