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
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">اهلا بيك في خدمتنا نقابه المهندسين الاسكندريه</h3>
        <img src="../assets/images/b4.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>{{ Auth::user()->name }}</h3>
    </div>



    <div class="navbar navbar-default navbar-static-top" id="nav">
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
                            <li><a href="#">تجديد التامين </a></li>
                            <li><a href="{{ url('/member-aditions') }}/{{ Auth::user()->id }}">الاشتراك في التامين</li>
                            <li><a href="#"> تجديد الاشتراك</a></li> 
                        </ul>
                    </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->

    </div><!--/.navbar -->

</div>



 
    @endsection