@extends('layout_man')

@section('title')
Редактировать пост
@stop

@section('content')

Редактирование записи.

{{ Form::open(array('url' => '/post/update')) }}
{{ Form::hidden('id', $post->id) }}

    {{ Form::label('title', 'Название') }}
    {{ Form::text('title', $post->title, array('placeholder' => 'Название')) }}
    <br/>
    {{ Form::label('content', 'Описание') }}
    {{ Form::textarea('content', $post->content, array('class' => 'tinymc')) }}



<p>{{ Form::submit('Сохранить.') }}</p>
{{ Form::close() }}
<script type="text/javascript">
tinymce.init({
    selector: "textarea.tinymc",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});



</script>
@stop
