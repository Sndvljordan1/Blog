@extends('layouts.master')

@section('title')
Reader
@stop

@section('content')
    <div class="jumbotron">
        <h1>{{{ $post->title }}}</h1>
        <h3>{{{ $post->tldr }}}</h3>
        <h6>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i: A') }}}</h6>
        <p>{{{ $post->body }}}</p>
    </div>
    {{-- @if(Auth::check() $$ Auth::id() == $post->user_id) --}}
    <a class="btn btn-primary" href="{{{ action('PostsController@index') }}}"><span class="glyphicon glyphicon-fast-backward"> Back to All</a>
    <a class="btn btn-warning" href="{{{ action('PostsController@edit', $post->id) }}}"><span class="glyphicon glyphicon-wrench"></span> Edit This Post</a>
    <button id="delete" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"> Delete</button>
    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
    {{ Form::close() }}
    {{-- @endif --}}
@stop

@section('script')
    <script>
    

        (function(){
        "use strict"
            $('#delete').on('click', function(){
                var onConfirm = confirm('Are you sure you want to delete this post?');

                if (onConfirm) {
                    $('#formDelete').submit();
                };
            });
            
        })();

    </script>

@stop


href="{{{ action('PostsController@destroy', $post->id) }}}"