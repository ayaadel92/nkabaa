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

<div class="container">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div style="width:1142px;height: 500px">
  <img src="/assets/images/final.jpg" alt="" style="width:1142px;height: 500px">

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
                            <li><a href="{{ url('/member-aditions') }}/{{ Auth::user()->id }}">الاشتراك في التامين</li>
                            <li><a href="{{ url('/rin') }}/{{ Auth::user()->id }}">  التجديدات </a></li> 
                        </ul>
                    </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->

    </div><!--/.navbar -->

</div>




 
    @endsection
    
    <style>
       .homepage-hero-module {
    border-right: none;
    border-left: none;
    position: relative;
}
.no-video .video-container video,
.touch .video-container video {
    display: none;
}
.no-video .video-container .poster,
.touch .video-container .poster {
    display: block !important;
}
.video-container {
    position: relative;
    bottom: 0%;
    left: 0%;
    height:100%;
    width: 100%;
    overflow: hidden;
    background: #000;
}
vedio{
    height:50%;
}
.video-container .poster img {
    width: 100%;
    bottom: 0;
    position: absolute;
}
.video-container .filter {
    z-index: 100;
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    width: 100%;
}
.video-container video {
    position: absolute;
    z-index: 0;
    bottom: 0;
}
.video-container video.fillWidth {
    width: 100%;
}


        
        </style>
    