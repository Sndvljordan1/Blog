@extends('layouts.master')

@section('title')
Edit Post
@stop

@section('pageTitle')
    <div class="jumbotron responsive">
        <h1>Edit Post</h1>
@stop

@section('content')
    
        <div class="container responsive">
            <h3>{{{ $post->title }}}</h3>
            <h5>{{{ $post->tldr }}}</h5>
            {{{ $post->body }}}
        </div>
    </div>
    <div class="container responsive">
     @foreach($errors->all() as $error)
            <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
        @endforeach
    {{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
        @include('posts.create-edit-form')
    {{ Form::close() }}
    
        
        

    </form>
    </div>
@stop
