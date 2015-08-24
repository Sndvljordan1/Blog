@extends('layouts.master')

@section('title')
Blog Posts
@stop

@section('content')
    <div class="container jumbotron">
        <h1>...</h1>
        @foreach($posts as $post)
            <h3>{{{ $post->title }}}</h3>
            <h6>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h A') }}}</h6>
            <p>{{{ $post->tldr }}}</p>
            <a class="btn" href="{{{ action('PostsController@show', $post->id) }}}">Read This Post</a>
        @endforeach
        <div>
            {{ $posts->links() }}
        </div>
    </div>
@stop