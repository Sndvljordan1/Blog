@extends('layouts.master')

@section('title')
Login
@stop

@section('pageTitle')
Login
@stop

@section('content')
    
    {{ Form::open(array('action' => 'PostsController@store')) }}
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="snoop@doggy.dogg">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit">
    {{ Form::close(); }}