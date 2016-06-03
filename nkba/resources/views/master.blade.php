@extends('layouts.app')

@section('content')


<style>
    body {
        font: 20px Montserrat, sans-serif;
        line-height: 1.8;
        color: #f5f6f7;
    }
    p {font-size: 16px;}
    .margin {margin-bottom: 45px;}
    .bg-1 { 
        background-color: #1abc9c; /* Green */
        color: #ffffff;
    }

    .container-fluid {
        padding-top: 70px;
        padding-bottom: 70px;
    }

</style>


        <!-- Main jumbotron for a primary marketing message or call to action -->
   <div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="/assets/images/b5.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>I'm an adventurer</h3>
</div>



        <div class="navbar navbar-inverse navbar-static-top " id="nav" style="margin-bottom: 0px">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="{{ url('/engineer') }}/{{ Auth::user()->id }}">المعلومات الشخيصه </a></li>
                    <li><a href="{{ url('/fin') }}/{{ Auth::user()->id }}">كشف حساب </a></li>
                    <li><a href="{{ url('/complain') }}/{{ Auth::user()->id }}">الشكاوي </a></li>
                    <li><a href="{{ url('/task') }}/{{ Auth::user()->id }}">مواعيدك </a></li>
                    <li><a href="#section5">اقرب دكتور اليك </a></li>
                    @if (Auth::user()->role === "مهندس")
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">الاشتراكات 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/member') }}/{{ Auth::user()->id }}">الاشتراك في التامين</li>
                            <li><a href="{{ url('/rin') }}/{{ Auth::user()->id }}">  التجديدات </a></li> 
                        </ul>
                    </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->

    </div><!--/.navbar -->






 
    @endsection
    
    <style>
       body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  

        
        </style>
    