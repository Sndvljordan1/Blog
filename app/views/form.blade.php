@extends('layouts.master')

@section('title')

@stop


@section('content')
    <form action="/form" method="POST">
        <input type="text" name="user" id="user" accept-charset="utf-8" value="{{{ Input::old('user') }}}">
        <input type="text" name="name" id="name" accept-charset="utf-8" value="{{{ Input::old('name') }}}">
        
        <input type="submit">
    </form>



@stop