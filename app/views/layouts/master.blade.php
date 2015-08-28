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
            <nav class="navbar navbar-inverse navbar-collapse collapse navbar-fixed-top responsive">
                <div class="container navbar-collapse collapse responsive">
                    <div class="navbar-header navbar-collapse collapse responsive">
                        <a class="navbar-brand navbar-collapse collapse responsive" href="{{{ action('HomeController@showResume') }}}">Resume <span class="divider">|</span></a>
                        <a class="navbar-brand navbar-collapse collapse responsive" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio <span class="divider">|</span></a>
                        <a class="navbar-brand navbar-collapse collapse active responsive" href="{{{ action('PostsController@index') }}}">Blog <span class="divider">|</span></a>
                    </div>
                    @if(Auth::check())
                        <div class="navbar-collapse collapse">
                            <a class="navbar-brand navbar-collapse collapse navbar-right" href="{{{ action('HomeController@doLogout') }}}">Logout</a>
                            <a class="navbar-brand navbar-collapse collapse navbar-right" href="{{{ action('PostsController@create') }}}">New Blog Post <span class="divider">|</span></a>
                            <a href="#" class="navbar-brand navbar-collapse collapse navbar-right">Welcome {{{ Auth::user()->first_name }}} <span class="divider">|</span></a>
                    @endif
                        
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>
        </main>
    </section>
    <div class="container">
        @yield('pageTitle')
       @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
        @yield('content')
    </div>
    @yield('script')
</body>

</html>