@extends('layouts.master')

@section('title')
Login
@stop

@section('pageTitle')
<div class="jumbotron">
<h1>Login</h1>
@stop

@section('content')
    
    {{ Form::open(array('action' => 'HomeController@doLogin')) }}
        {{ Form::token() }}
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="snoop@bloggy.blogg">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" class="btn btn-success">
    {{ Form::close(); }}
    </div>
@stop