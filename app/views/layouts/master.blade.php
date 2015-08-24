<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title> @yield('title') </title>
</head>
<body>

    <section>
        <main>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{{ action('HomeController@showResume') }}}">Resume</a>
                        <a class="navbar-brand" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
                        <a class="navbar-brand active" href="{{{ action('PostsController@index') }}}">Blog</a>
                        <a class="navbar-brand" href="{{{ action('PostsController@create') }}}">New Blog Post</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>
        </main>
    </section>
    <div class="container">
        @yield('pageTitle')
       
        @yield('content')
    </div>
    @yield('script')
</body>

</html>