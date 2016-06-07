
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>نقابه المهندسين</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/grid.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/camera.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">

    <!-- jQuery -->
    <script type="text/javascript" src="/assets/AnotherAss/js/jquery-1.11.1.min.js"></script>
    <!-- jQuery UI -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
    <!--     PNotify -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/AnotherAss/css/pnotify.core.min.css"/>
<!--     <link rel="stylesheet" href="/assets/AnotherAss/css/pnotify.buttons.min.css"/> 
--> <link href="/assets/AnotherAss/css/pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/assets/AnotherAss/css/jquery.pnotify.default.css">


<!-- Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.js"></script>
<script src='/assets/js/camera.js'></script>
<script src="/assets/js/owl.carousel.js"></script>
<script src="/assets/js/jquery.stellar.js"></script>
<script src="/assets/js/script.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/assets/js/jquery.mobile.customized.min.js"></script>
<script src="/assets/js/wow.js"></script>
<link rel="stylesheet" href="/assets/css/grid.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/touchTouch.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="/assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">


     <!-- Styles -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--     {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->



    @include('headers')

</head> 
 <div id="header" style="height: 300px ; background-color: #F3F3F3">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}" title="">
                                <img src="/assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
<!--#3D7A33-->
<!--#33747a-->
       <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                  
                                         <a class="fa-home active" href="{{url('/')}}">الرئيسية</a>
                                    </li>
                                    <li>
                                       
                                        @if (!Auth::guest())

                    @if (Auth::user()->role === "مهندس" || Auth::user()->role === "قريب")
                    <a class="fa-gears " href="{{ url('/engineer') }}/{{ Auth::user()->id }}">الشخصية</a>
                    @endif
                  @if(Auth::user()->role === "معمل" || Auth::user()->role === "مستشفي")
                  <a class="fa-gears " href="{{ url('/create') }}">المعمل</a>
                  @endif
                    @endif
                                
                                    </li>
                                    <li>
                                     
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">دخول</a></li>
                    <li><a href="{{ url('/register') }}">التسجيل</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>خروج</a></li>
                        </ul>
                    </li>
                    @endif
                            
                                    </li>
                                   </ul >
                        </div>
                    </div>
                </div>
            </div>
       </div>    
           
   

@include('laravelPnotify::notify')
@yield('content')


  <!-- JS -->

            <script type="text/javascript" src="/assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="/assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="/assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="/assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="/assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="/assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="/assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="/assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
            
<!-- JavaScripts -->
    <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>

    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>

        <!-- JavaScripts -->
        <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>
         <!-- pnotify -->
      <script type="text/javascript" src="/assets/js/jquery.pnotify.js"></script>

        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="/assets/js/pnotify.core.min.js"></script> 

<!--     <script type="text/javascript" src="assets/js/pnotify.buttons.min.js"></script>
-->   
 <script type="text/javascript" src="/assets/js/pnotify.custom.min.js"></script> 




        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> 

 






    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script type="text/javascript" src="/assets/js/jquery.pnotify.js"></script>

    <script type="text/javascript" src="/assets/js/pnotify.core.min.js"></script>
    <script type="text/javascript" src="/assets/js/pnotify.custom.min.js"></script>
