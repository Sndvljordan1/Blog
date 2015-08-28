@extends('layouts.master')

@section('title')
Resume
@stop

@section('content')
<body>

    
    <div class="jumbotron responsive">
        <div class="container responsive">
            <h1>Hello World!<small> Meet Jordan Sandoval</small></h1>
            <img src="img/profile.jpg" class="img-thumbnail responsive">
        </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4 responsive">
              <h3>About me</h3>
              <ul>
                <li>Proficient with Microsoft Word, Excel, and Publisher</li>
                <li>Excellent communication skills</li>
                <li>Efficient problem solver</li>
                <li>Friendly, and good at working with a team</li>
                <li>Strong math skills</li>
            </ul>
            </div>
            <div class="col-md-4 responsive">
                <h3>Past Work Experience</h3>
                    <ul>
                        <li>Roofing Crew, Sunset Roofing, Midland, Texas   Summer 2010
                        </li>
                        <li>Section Leader, Rouse High School Marching Band, Leander, Texas Fall 2009- Spring 2010</li>
                        <li>Cashier, Academy Sports and Outdoors,  Cedar Park, Texas  July 2012-May 2013, February 2014-October 2014</li>
                        <li>Delivery Driver, Domino’s Pizza (B4 Pizza LLC), Austin, Texas  May 2013-February 2014, July 2014-October 2014</li>
                        <li>Porter, Roger’s Ford Sales LLC, Midland, Texas October 2014-May 2015</li>
                    </ul>
            </div>
            <div class="col-md-4 responsive">
                <h3>Education</h3>
                    <ul>
                        <li>High School Graduate Class of 2012, Rouse High School , Leander, Texas</li>
                        <li>18 Credit Hours, Austin Community College, Leander, Texas</li>
                    </ul>
            </div>
        </div>
        <div class="row responsive">
            <div class-"col-mid-4 responsive">
                <h3>Volunteer Work</h3>
                    <ul>
                        <li>Mission Work in Central Mexico – Spring 2003-2011</li>
                        <li>Song Leader at Leander Church of Christ – 2008-October 2014</li>
                        <li>Some Other Place (Soup Kitchen in Beaumont Texas) – October 2004,2005</li>
                        <li>Rouse High School Library – 6 hours weekly  Fall 2009- Spring 2012</li>
                        <li>Mission Work in Honduras – Spring 2014</li>
                    </ul>
            </div>
        </div>
    <hr>

    <footer>
        <p>© Jordan Sandoval 2015</p>
    </footer>
    </div> <!-- /container -->


            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>


</body>




@stop