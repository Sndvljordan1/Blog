@extends ('layouts.master')


@section('title')
Roll the Dice
@stop

@section('content')
<h1> The roll... {{{$roll}}}, Your guess... {{{$guess}}}, {{{$response}}}</h1>
@stop