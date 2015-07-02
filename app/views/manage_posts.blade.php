@extends('layout_man')
 
@section('title')
редактирование постов
@stop
 
@section('content')
редактирование постов
{{ HTML::link('/post/create', 'Добавить', array('class'=>'btn btn-primary')) }}
@foreach($posts as $post)
    <div class="container-fluid bg-success block_example">
        
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
            <div class="col-md-1">
                <a href="{{ URL::to('/post/show/'.$post->id) }}" class="btn btn-primary">Показать</a>
            </div>
            <div class="col-md-2">
                <a href="{{ URL::to('/post/edit/'.$post->id) }}" class="btn btn-primary">Редактировать</a>
            </div>
            <div class="col-md-2">
                {{ Form::open(array('url' => '/post/destroy')) }}
                    {{ Form::hidden('id', $post->id) }}
                    <p>{{ Form::submit('Удалить.', array('class' => 'btn btn-danger', 'id' => 'delete_item')) }}</p>
                {{ Form::close() }}
            </div>

        </div>

    </div>
@endforeach
<script type="text/javascript">
$(document).ready(function(){
    $('#delete_item').click(function(){
        if(confirm('Вы действительно хотите удалить элемент?'))
            return true;
        else 
            return false;
    });
    
});



</script>

@stop