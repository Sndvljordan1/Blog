@extends('layouts.master')

@section('title')
Edit Post
@stop

@section('content')
    <div class="jumbotron">
        <h1>Edit Post</h1>
        <div class="container">
            @if (Session::has('successMessage'))
                <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            @if (Session::has('errorMessage'))
                <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif
            
            <h3>{{{ $post->title }}}</h3>
            <p>{{{ $post->body }}}</p>
        </div>
    </div>
    <div class="container">
     @foreach($errors->all() as $error)
            <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
        @endforeach
    {{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
        @include('posts.create-edit-form')
    {{ Form::close() }}
    
        
        

    </form>
    </div>
@stop
