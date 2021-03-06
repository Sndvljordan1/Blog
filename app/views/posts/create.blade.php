@extends('layouts.master')

@section('title')
Create Post
@stop


@section('pageTitle') 
    <div class="jumbotron">   
        <h1>Create a Post</h1>
    </div>
@stop


@section('content')
    <div class="container">
    
         @foreach($errors->all() as $error)
            <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
        @endforeach
        {{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
        @include('posts.create-edit-form')
        <div class="btn-group btn-group-justified">
            <div class="btn">
                {{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Save Post', array('class' => 'btn btn-success pull-left', 'type' => 'submit')) }}
            </div>
    {{ Form::close() }}
    
        

    </form>
    </div>

    
@stop

@section('script')
<script src="/js/Markdown.Sanitizer.js"></script>
<script src="/js/Markdown.Converter.js"></script>
<script src="/js/Markdown.Editor.js"></script>
<script type="text/javascript">
    (function () {
        
        var converter = new Markdown.Converter();
        
        var editor = new Markdown.Editor(converter);
        
        editor.run();
    })();
</script>
@stop