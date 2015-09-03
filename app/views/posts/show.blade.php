@extends('layouts.master')

@section('title')
Reader
@stop

@section('content')
    <div class="jumbotron responsive">
        <form class="form align-right responsive">
            <input type="text" name="search" id="search" class="search-query" placeholder="Search">
        </form>
        <h1>{{{ $post->title }}}</h1>
        <h3>{{{ $post->tldr }}}</h3>
        <h5>{{{ 'Posted By: ' . $post->user->first_name . ' ' . $post->user->last_name }}}</h5>
        <h6>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</h6>
        {{ $post->renderBody() }}
        <div class="col-md-3">
            <img src="{{ $post->image }}" alt="">
        </div>
    </div>
    {{-- @if(Auth::check() $$ Auth::id() == $post->user_id) --}}
    <a href="{{{ action('PostsController@index') }}}"><button class="btn btn-primary" ><span class="glyphicon glyphicon-fast-backward responsive"></span> Back to All</button></a>

    @if(Auth::check() && Auth::id() == $post->user_id)
    
        <a href="{{{ action('PostsController@edit', $post->id) }}}"><button class="btn btn-warning" ><span class="glyphicon glyphicon-wrench"></span> Edit This Post</button></a>

        <button id="delete" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"></span> Delete</button>
        {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
        {{ Form::close() }}
    @endif 
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