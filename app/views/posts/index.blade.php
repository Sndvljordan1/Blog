@extends('layouts.master')

@section('title')
Blog Posts
@stop

@section('content')
    <div class="container jumbotron">
        <h1>...</h1>
        @foreach($posts as $post)
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
            <h5>{{{ 'Posted By: ' . $post->user->first_name . ' ' . $post->user->last_name }}}</h5>
            <h6>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h A') }}}</h6>
            <p>{{{ $post->tldr }}}</p>
        @endforeach
        <div>
            {{ $posts->links() }}
        </div>
    </div>
@stop