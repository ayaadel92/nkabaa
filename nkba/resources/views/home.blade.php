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
                    <li><a href="{{ url('/home') }}/{{ Auth::user()->id }}">المعلومات الشخيصه </a></li>
                    <li><a href="#section2">كشف حساب </a></li>
                    <li><a href="#section5">الشكاوي </a></li>
                    <li><a href="#section5">مواعيدك </a></li>
                    <li><a href="#section5">اقرب دكتور اليك </a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">الاشتراكات 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">تجديد التامين </a></li>
                            <li><a href="#">الاشتراك في التامين</li>
                            <li><a href="#"> تجديد الاشتراك</a></li> 
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->

    </div><!--/.navbar -->





    <div class="container" >

        <form class="well form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>     <h3 class="tittle  pull-right" style="font-size:30px">المعلومات الشخصيه بالمهندس</h3></legend>

                <!-- Text input-->

                <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #1abc9c'> الاسم</p>  </label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user->name}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" > <p style='color: #1abc9c'>رقم العضويه </p></label> 
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="{{$user->eng_id}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>سنه التخرج </p></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="{{$user->gradu_year}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>البريد الالكتروني </p></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="{{$user->email}}" class="form-control" type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>رقم الهاتف  </p></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="address" placeholder="{{$user->phone_number}}" class="form-control" type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>العنوان   </p></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city" placeholder="{{$user->address}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>النوع   </p></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="zip" placeholder="{{$user->gender}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>الرقم القومي </p></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="zip" placeholder="{{$user->national_id}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>



                <!--<div class="form-group">
                  <label class="col-md-4 control-label"><p style='color: #1abc9c'>الرقم السري  </p></label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="zip" placeholder="{{$user->password}}" class="form-control"  type="text" readonly>
                    </div>
                </div>
                </div>-->

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">



                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">تعديل الملف الشخصي  <span class="glyphicon glyphicon-send"></span></button>

                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>  ملحوظه لا يمكن التجديد الا في الرقم السري</span></p></h4>
                                    </div>
                                    <div class="modal-body">

                                        {!! Form::open(['route'=>['home.update',$user->id],'method'=>'put' ]) !!}

                                        <div class="form-group">

                                            <label for="exampleInputEmail1"> ادخل الرقم السري </label>
                                            <input type="text" class="form-control" value="password" name="password">
                                        </div>



                                        <button type="submit" class="btn btn-default">edit</button>
                                        {!! Form::close() !!}

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>


































</div>

</div>
@endsection