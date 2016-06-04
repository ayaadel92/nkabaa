    @include('master')
  
<!--    <div class="overlay"></div>-->
@if (Auth::user()->role === "مهندس")

<div class="container text-center">    
    <div class="container" style="margin-top: 100px">
    <div style="height: 200px" >
         <h3 class="tittle  pull-right " style="font-size:30px">المعلومات الشخصيه بالمهندس</h3>
    </div>
<div>
 
    <div class="col-sm-8 ">
    

        <form class=" form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>    </legend>
<div class="container">
     <ul class="timeline">
                <!-- Text input-->
                   <li>
          <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20'> الاسم</p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->name}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
                   </li>
                <!-- Text input-->
             <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-4 control-label" > <p style='color: #339933 ;font-size: 20'>رقم العضويه </p></label> 
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" value="{{$user['0']->eng_id}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
             </li>

                <!-- Text input-->
                
                  <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group " >
                    <label class="col-md-4 control-label"><p style='color: #339933 ;font-size: 20'>سنه التخرج </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" value="{{$user['0']->gradu_year}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
                  </li>

                <!-- Text input-->
        <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #339933 ;font-size: 20'>البريد الالكتروني </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" value="{{$user['0']->email}}" class="form-control" type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
        </li>

                <!-- Text input-->
<li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #339933 ;font-size: 20'>رقم الهاتف  </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="address" value="{{$user['0']->phone_number}}" class="form-control" type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
</li>
                <!-- Text input-->
<li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #339933 ;font-size: 20'>العنوان   </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city" value="{{$user['0']->address}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
</li>

                <!-- Select Basic -->

                <!-- Text input-->
<li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #339933 ;font-size: 20'>النوع   </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="zip" value="{{$user['0']->gender}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
</li>


<li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-4 control-label"><p style='color: #339933 ;font-size: 20'>الرقم القومي </p></label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="zip" value="{{$user['0']->national_id}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>

          </div>
</li>

<li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-10">



                        <button type="button" class="btn btn-warning  hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal">تعديل الملف الشخصي  <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
          </div>
</li>
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
     </ul>           </div>
</div>
            </fieldset>
        </form>
  
    </div>

     
  
<!--    <div class="col-sm-4"> 
      <img src="/assets/images/profile_img.png" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>-->
  
  
</div><br>
</div>
</div>     

@else

<div class="container">
<div class="container text-center">    
 <div class="container text-center">    
    <div class="container" style="margin-top: 100px">
    <div style="height: 200px" >
         <h3 class="tittle  pull-right " style="font-size:30px">المعلومات الشخصيه بالقريب</h3>
    </div>
<div>
    <div class="col-sm-8 " style="margin-top: 50px">
    

        <form class=" form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>

                <!-- Form Name -->
              
               <div class="container">
     <ul class="timeline">
                <!-- Text input-->
           <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20'> الاسم</p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->name}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
           </li>
<!--relation_type-->
                 <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20'> درجه القرابيه</p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->relation_type}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
                 </li>
                 
                 
          <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
      <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20'> رقم البطاقه العلاجيه </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->health_id}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
          </li>
<!--eng_id-->
 
 <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
             <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20'> رقم العضويه المهندس </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->eng_id}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
 </li>
<!--birth_date-->

 <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">

                      <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20'> الميلاد  </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->birth_date}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
 </li>

 
  <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
             <div class="form-group" style="margin-top:30px">
                    <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20'> ارقم القومي </p>  </label>  
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" value="{{$user['0']->national_id}}" class="form-control"  type="text" readonly style="height: 40px">
                        </div>
                    </div>
                </div>
          </div>
  </li>



   <li >
          <div class="timeline-badge info pull-right"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
                <div class="form-group">
                    <label class="col-md-10 control-label"></label>
                    <div class="col-md-4">


                             <button type="button" class="btn btn-warning hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal">تعديل الملف الشخصي  <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
          </div>
   </li>
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
</ul>
               </div>
        </form>
    </div>

     
  
<!--    <div class="col-sm-4"> 
      <img src="/assets/images/profile_img.png" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>-->
  

</div><br>
</div>
@endif
</div>
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

   @import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);

.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 25px;
  margin-right: -1.5px;
}

.timeline > li {
  margin-bottom: 20px;
  position: relative;
}

.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}

.timeline > li:after {
  clear: both;
}

.timeline > li > .timeline-panel {
  width: calc( 100% - 75px );
  float: right;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}

.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  left: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-right: 15px solid #ccc;
  border-left: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}

.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  left: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-right: 14px solid #fff;
  border-left: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}

.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 0px;
  margin-right: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}

.timeline-badge.primary {
  background-color: #2e6da4 !important;
}

.timeline-badge.success {
  background-color: #3f903f !important;
}

.timeline-badge.warning {
  background-color: #f0ad4e !important;
}

.timeline-badge.danger {
  background-color: #d9534f !important;
}

.timeline-badge.info {
  background-color: #5bc0de !important;
}
</style>