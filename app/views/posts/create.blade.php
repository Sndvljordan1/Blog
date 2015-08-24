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
    @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
         @foreach($errors->all() as $error)
            <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
        @endforeach
    {{ Form::open(array('action' => 'PostsController@store')) }}
        @include('posts.create-edit-form')
    {{ Form::close() }}
        

    </form>
    </div>
    
@stop

