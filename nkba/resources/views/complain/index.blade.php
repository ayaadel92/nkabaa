@include('master')


<div class="col-md-9">


       <div style="height: 100px"></div> 
    <div style="margin-right: 0px" >
        <h3 style="color: #3D7A33 ;alignment-adjust: left">الشكاوي </h3>
        <div style="height: 150px"></div> 
    </div>
   
            
<i class="fa-stethoscope  fa-2x animate flash" style="size: 20px">اصبح من حقك ان تضع ملاحظاتك سوء علي طيب ,دكتور او مشفي </i> 
               
   <div style="height: 100px"></div> 
           
            
         
         <div id="accordion2" class="panel-group alternative">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #3D7A33">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse2-One" data-parent="#accordion2" data-toggle="collapse">
                                                شكوي عن مشفي 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2-One" class="accordion-body collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="/assets/img/fillers/hospital.png" alt="filler image">
                                                </div>
                                                <div class="col-md-7">
                                                    <h5 class="no-margin no-padding" style="color:#B32B2B">شكوي عن مشفي </h5>
                                                       <br><br><br>
                                                    <p style="font-size: 25px">يمكنك ان تقول الان كامل ملاحظاتك عن المشفي التابع للنقابه مع ارفاق اوراق  او صور عن الشكوي و ذلك سعيا منا علي رفع مستوي المشفي التي تخدم مهندسينا</p>
                                                       <br><br><br>
                                                                <button type="button" class="btn-green " data-toggle="modal" data-target="#myModal">اضافه شكوي مستشفي <span class="glyphicon glyphicon-send"></span></button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #3D7A33">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse2-Two" data-parent="#accordion2" data-toggle="collapse">
                                                شكوي عن طبيب
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2-Two" class="accordion-body collapse">
                                        <div class="panel-body">
                                             <div class="row">
                                                <div class="col-md-5">
                                                    <img src="/assets/img/fillers/doctor10.png" alt="filler image">
                                                </div>
                                                <div class="col-md-7">
                                                    <h5 class="no-margin no-padding" style="color:#B32B2B" >اضافه شكوي علي طبيب</h5>
                                                    <br><br><br>
                                                    <p style="font-size: 25px">يمكنك ان تقول الان كامل ملاحظاتك عن الدكتور  التابع للنقابه مع ارفاق اوراق او صور عن الشكوي و ذلك سعيا منا علي رفع مستوي الدكتور</p>
                                                       <br><br><br>
                                                <button type="button" class=" btn-green" data-toggle="modal" data-target="#myModal1">اضافه شكوي دكتور <span class="glyphicon glyphicon-send"></span></button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #3D7A33">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse2-Three" data-parent="#accordion2" data-toggle="collapse">
                                               شكوي عن معمل اشعه و تحليل
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2-Three" class="accordion-body collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="/assets/img/fillers/Logo4.png" alt="filler image">
                                                </div>
                                                <div class="col-md-7">
                                                   <h5 class="no-margin no-padding" style="color:#B32B2B" >اضافه شكوي علي معمل اشعهة و تحاليل</h5>
                                                   <br><br><br>
                                                    <p style="font-size: 25px">يمكنك ان تقول الان كامل ملاحظاتك عن معمل الاشعه التابع للنقابه مع ارفاق اوراق او صور عن الشكوي و ذلك سعيا منا لرفع مستوي معمل الاشعه و التحاليل</p>
                                                     <br><br><br>
                                                <button type="button" class=" btn-green" data-toggle="modal" data-target="#myModal3">اضافه شكوي معمل <span class="glyphicon glyphicon-send"></span></button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                
                


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه شكوي مستشفي</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/complain" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                  
                        <div class="form-group">
                             <h5 class="no-margin no-padding" style="color:#B32B2B">شكوي عن مشفي </h5>

                            <div class="col-sm-6">
                                    <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> الاسم :</p>  </label>  
                             
                             
				<div class="form-group">
					
					<select id="role" name="name_hosptail" class="form-control">
                                             

						
                                                 @for ($i = 0; $i < $number ; $i++)
						 @foreach($hospitals as $hospital)
                                                 
						<option>{{ $hospital->name }}</option>
                                                 
						@endforeach
						 @endfor

                                                
					</select>
				</div>
                                     <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> تاريخ الشكوي :</p>  </label> 
                                      <input type="date" name="date" id="task-name" class="form-control" >
                                       <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> وقت الشكوي :</p>  </label> 
                                       <input type="time" name="time" id="task-name" class="form-control" >
           <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> وصف الشكوي :</p>  </label>  

                                <textarea class="form-control " rows="5" name="dec"></textarea>
                                           <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> الملف المرفق :</p>  </label>  

                            <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                             
                             
                             
                                
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn-green">
                                    <i class="fa fa-btn fa-plus"></i>اضف شكوي علي مشفي 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>






<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه شكوي دكتور</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/complain" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    
                        <div class="form-group">
                              <h5 class="no-margin no-padding" style="color:#B32B2B">شكوي عن دكتور </h5>

                            <div class="col-sm-6">
                                  <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> الاسم :</p>  </label>  
                                <div class="form-group">
					
					<select id="role" name="name_hosptail" class="form-control">
                                             

						
                                                 @for ($i = 0; $i < $number ; $i++)
						 @foreach($doctors as $doctor)
                                                 
						<option>{{ $doctor->name }}</option>
                                                 
						@endforeach
						 @endfor

                                                
					</select>
				</div>
                                     <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> تاريخ الشكوي :</p>  </label> 
                                      <input type="date" name="date" id="task-name" class="form-control" >
                                       <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> وقت الشكوي :</p>  </label> 
                                                   <input type="time" name="time" id="task-name" class="form-control" >
                                 <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> محتوى الشكوي :</p>  </label>  
                                <textarea class="form-control" rows="5" name="dec"></textarea>
                                <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> الملف المرفق :</p>  </label>  
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                        </div>

                      
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn-green">
                                    <i class="fa fa-btn fa-plus"></i>اضف شكوي علي دكتور
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>







<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه شكوي معمل</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/complain" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                     
                        <div class="form-group">
                            <h5 class="no-margin no-padding" style="color:#B32B2B">اضف شكوي علي معمل </h5>

                            <div class="col-sm-6">
                                <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'>الاسم: </p>  </label>  
                                <input type="text" name="name_lab" id="task-name" class="form-control" >
                                <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> محتوى الشكوي :</p>  </label> 
                                <textarea class="form-control" rows="5" name="dec"></textarea>
                                 <label class="col-md-8 control-label">  <p style='color: #339933 ;font-size: 20px; float:right;'> الملف المرفق :</p>  </label>  
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn-green">
                                    <i class="fa fa-btn fa-plus"></i>اضف شكوي معمل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>














<div style="height:200px"></div>

</div>






</div>


<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

<script>
    jQuery(function () {
        jQuery('#myTab a:last').tab('show')
    })
</script>