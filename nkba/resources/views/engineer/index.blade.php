
@include('master')

<!--    <div class="overlay"></div>-->
@if (Auth::user()->role === "مهندس")
<div class="col-md-9">
 <div style="height: 100px"></div> 
    <div style="margin-right: 0px" >
        <h3 style="color: #3D7A33 ;alignment-adjust: left">المعلومات الشخصيه</h3>
        <div style="height: 100px"></div> 
    </div>




    <form class=" form-horizontal central" action=" " method="post"  id="contact_form">
        <fieldset>




            <div class="form-group animate swing" style="margin-top:30px">
                <label class="col-md-2 control-label">  <p style='color: #339933 ;font-size: 25px'> الاسم:</p>  </label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" value="{{$user['0']->name}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>


            <!-- Text input-->


            <div class="form-group  animate swing">
                <label class="col-md-2 control-label" > <p style='color: #339933 ;font-size:  17px'>رقم العضويه :</p></label> 
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" value="{{$user['0']->eng_id}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>


            <!-- Text input-->


            <div class="form-group  animate swing" >
                <label class="col-md-2 control-label "><p style='color: #339933 ;font-size: 17px'>سنه التخرج :</p></label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" value="{{$user['0']->gradu_year}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group animate swing">
                <label class="col-md-2 control-label"><p style='color: #339933 ;font-size: 14px'>البريد الالكتروني :</p></label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" value="{{$user['0']->email}}" class="form-control" type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group animate swing">
                <label class="col-md-2 control-label"><p style='color: #339933 ;font-size: 18px'>رقم الهاتف  :</p></label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="address" value="{{$user['0']->phone_number}}" class="form-control" type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group animate swing">
                <label class="col-md-2 control-label"><p style='color: #339933 ;font-size: 20px'>العنوان :</p></label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="city" value="{{$user['0']->address}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>

            <!-- Select Basic -->


            <div class="form-group animate swing">
                <label class="col-md-2 control-label"><p style='color: #339933 ;font-size: 20px'>النوع   :</p></label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="zip" value="{{$user['0']->gender}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>



            <div class="form-group animate swing">
                <label class="col-md-2 control-label"><p style='color: #339933 ;font-size: 15px'>الرقم القومي :</p></label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="zip" value="{{$user['0']->national_id}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>



            <div class="form-group animate swing">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-8">



                    <button type="button" class=" btn-green "  data-toggle="modal" data-target="#myModal" style="color:#3D7A33">تعديل الملف الشخصي  <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

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
                                <div class="col-md-10">

                                    <label for="exampleInputEmail1" style="color: #339933"> ادخل الرقم السري </label>
                                    <input type="text" class="form-control" value="password" name="password">
                                </div>
                            </div>



                            <button type="submit" class="btn btn-green">edit</button>
                            {!! Form::close() !!}

                        </div>
                    </div>

                </div>
            </div>


        </fieldset>
    </form>

    <div style="height: 100px"></div>

</div>





@else

<div class="col-md-9">
  <div style="height: 100px"></div> 
    <div style="margin-right: 0px" >
        <h3 style="color: #3D7A33 ;alignment-adjust: left">المعلومات الشخصيه </h3>
        <div style="height: 100px"></div> 
    </div>

    <form class=" form-horizontal" action=" " method="post"  id="contact_form">
        <fieldset>


            <div class="form-group animate swing" style="margin-top:30px">
                <label class="col-md-2 control-label">  <p style='color: #339933 ;font-size: 20px'> الاسم:</p>  </label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" value="{{$user['0']->name}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>

            <!--relation_type-->

            <div class="form-group animate swing" >
                <label class="col-md-2 control-label">  <p style='color: #339933 ;font-size: 15px'> درجه القرابيه:</p>  </label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" value="{{$user['0']->relation_type}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>




            <div class="form-group animate swing">
                <label class="col-md-2 control-label">  <p style='color: #339933 ;font-size: 14px'> البطاقه العلاجيه :</p>  </label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" value="{{$user['0']->health_id}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>
            </div>

            <!--eng_id-->


            <div class="form-group animate swing" >
                <label class="col-md-2 control-label">  <p style='color: #339933 ;font-size: 20px'> العضويه  :</p>  </label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" value="{{$user['0']->eng_id}}" class="form-control"  type="text" readonly style="height: 40px">
                    </div>
                </div>

                <!--birth_date-->
            </div>
                <div class="form-group animate swing" >
                    <label class="col-md-2 control-label">  <p style='color: #339933 ;font-size: 20px'> الميلاد :</p>  </label>  
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->birth_date}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>



                <div class="form-group animate swing" >
                    <label class="col-md-2 control-label">  <p style='color: #339933 ;font-size: 15px'> رقم القومي:</p>  </label>  
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->national_id}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                    <div class="col-md-8">


                        <button type="button" class=" btn-green" data-toggle="modal" data-target="#myModal">تعديل الملف الشخصي  <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

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
                                   <div class="col-md-8">    
                                    <label for="exampleInputEmail1" style="color: #339933"> ادخل الرقم السري </label>
                                  
                                    <input type="text" class="form-control" value="password" name="password">
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-green">edit</button>
                                {!! Form::close() !!}

                            </div>
                        </div>

                    </div>
                </div>
          
        </fieldset>


    </form>
   
 <div style="height: 200px"></div>
</div>



</div>
@endif
</div>



<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">

            <!-- Copyright -->
            
            <!-- End Copyright -->
        </div>
    </div>
</div>