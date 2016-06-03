    @include('master')
    <div class="container">
    <div style="height: 200px" >
         <h3 class="tittle  pull-right " style="font-size:30px">المعلومات الشخصيه بالمهندس</h3>
    </div>
<div class="body">
    <div class="overlay"></div>
@if (Auth::user()->role === "مهندس")

<div class="container text-center">    

  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    

        <form class=" form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>    </legend>

                <!-- Text input-->

                <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 30'> الاسم</p>  </label>  
                    <div class="col-md-12 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user['0']->name}}" class="form-control"  type="text" readonly style="height: 80px">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" > <p style='color: #1abc9c'>رقم العضويه </p></label> 
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="{{$user['0']->eng_id}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group " >
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>سنه التخرج </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="{{$user['0']->gradu_year}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>البريد الالكتروني </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="{{$user['0']->email}}" class="form-control" type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>رقم الهاتف  </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="address" placeholder="{{$user['0']->phone_number}}" class="form-control" type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>العنوان   </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city" placeholder="{{$user['0']->address}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>النوع   </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="zip" placeholder="{{$user['0']->gender}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #1abc9c'>الرقم القومي </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="zip" placeholder="{{$user['0']->national_id}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-10">



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

                                        {!! Form::open(['route'=>['home.update',$user['0']->id],'method'=>'put' ]) !!}

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

     
  
<!--    <div class="col-sm-4"> 
      <img src="/assets/images/profile_img.png" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>-->
  
  </div>
</div><br>
</div>
</div>     

@else

<div class="container">
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-4">
    

        <form class=" form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>     <h3 class="tittle  pull-right" style="font-size:30px">المعلومات بالقريب</h3></legend>

                <!-- Text input-->

                <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #1abc9c;font-size: 30'> الاسم</p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user['0']->name}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>
<!--relation_type-->
               
                <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #1abc9c'> درجه القرابيه</p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user['0']->relation_type}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>


      <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #1abc9c'> رقم البطاقه العلاجيه </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user['0']->health_id}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>

<!--eng_id-->

             <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #1abc9c'> رقم العضويه المهندس </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user['0']->eng_id}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>

<!--birth_date-->



                      <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #1abc9c'> الميلاد  </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user['0']->birth_date}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>


             <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #1abc9c'> ارقم القومي </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="{{$user['0']->national_id}}" class="form-control"  type="text" readonly>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-10 control-label"></label>
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

                                        {!! Form::open(['route'=>['home.update',$user['0']->id],'method'=>'put' ]) !!}

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

     
  
<!--    <div class="col-sm-4"> 
      <img src="/assets/images/profile_img.png" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>-->
  
  </div>
</div><br>
</div>
@endif

    <div class="footer">
            <div class="container">

                <div class="footer-text">
                    <p>© ITI Graduation Project | Design by ITI</a> </p>
                </div>
            </div>
        </div>
</div>

<style>
    @import url(http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css)
    p{
        
    }
  .body {
/*      background-color: #b6b7b6;*/
      padding-top: 0px;
      
/*      background-image: url('/assets/images/bg_img.jpg');*/
      background-size:cover;
      position:relative;
}
/*.overlay {
    position: absolute;
    background: rgba(0,0,0,0.2);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}*/


</style>