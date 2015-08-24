@extends('layouts.master')

@section('title')
Portfolio
@stop

@section('content')
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Working Projects</h1>
            <img src="img/construction.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>My First Web Builds</h2>
                    <ul>
                        <li><h4><a href="{{{ action('HomeController@showHello') }}}" target="_blank">First HTML/CSS Project</a></h4></li>
                        <li><h4><a href="{{{ action('HomeController@showFirstForm') }}}" target="_blank">First Form Exercises</a></h4></li>
                        <li><h4><a href="{{{ action('HomeController@showPositions') }}}" target="_blank">CSS Positions Experiment</a></h4></li>
                        <li><h4><a href="{{{ action('HomeController@showFloydBox') }}}" target="_blank">Adding a Background and Cleaning Edges</a></h4></li>
                        <li><h4><a href="{{{ action('HomeController@showCalc') }}}" target="_blank">Basic JavaScript Calculator</a></h4></li>
                        <li><h4><a href="{{{ action('HomeController@showMaps') }}}" target="_blank">First Use of Google Maps API</a></h4></li>
                        <li><h4><a href="{{{ action('HomeController@playSimon') }}}" target="_blank">Simple Simon Game</a></h4></li>
                        <li><h4><a href="{{{ action('HomeController@playWhack') }}}" target="_blank">Simple Whack-A-Mole Game</a></h4></li>
                    </ul>
            </div>
        </div>
    </div>
    </main>
</section>
</body>
@stop