<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
            <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="blog.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <a class="navbar-brand active" href="{{{ action('PostsController@index') }}}">Home</a>
            <a class="navbar-brand" href="{{{ action('PostsController@create') }}}">New</a>
            <a class="navbar-brand" href="#">Press</a>
            <a class="navbar-brand" href="#">New hires</a>
            <a class="navbar-brand" href="#">About</a>
        </nav>
        <div class="container">
            @yield('pageTitle')
            @foreach($errors->all() as $error)
                <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
            @endforeach
            @yield('content')
        </div>
    </body>

</html>