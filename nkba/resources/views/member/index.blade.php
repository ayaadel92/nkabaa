@include('master')

<div class="col-md-9">

         <div style="height: 100px"></div> 
    <div style="margin-right: 0px" >
        <h3 style="color: #3D7A33 ;alignment-adjust: left">الإشتراك في التأمين الصحي </h3>
        <div style="height: 100px"></div> 
    </div>
 
         <h5 style="color:#B32B2B" class="fa-stethoscope fa-2x">الطلبات الأساسيه لإشتراك  الصحي </h5>
         <p style="font-size: 25px" class="animate slideInDown"> إذا كنت تريد الإشتراك للوالد فالأوراق المطلوبه للإشتراك صوره البطاقه الشخصيه مع صوره شخصيه</p>
                <p style="font-size: 25px" class="animate slideInDown"> إذا كنت تريد الإشتراك للوالده فالاوراق المطلوبه للإشتراك صوره شهاده ميلاد المهندس مع صوره شخصيه</p>
                <p style="font-size: 25px" class="animate slideInDown"> إذا كنت تريد الإشتراك للزوجه فالاوراق المطلوبه للإشتراك صوره قسيمه الزواج مع صوره شخصيه</p>
                <p style="font-size: 25px" class="animate slideInDown"> إذا كنت تريد الإشتراك للإبنه فالأوراق  المطلوبه صوره شخيص بالإضافه لشهادة الميلاد علي أن تكون غير متزوجه</p>
                <p style="font-size: 25px" class="animate slideInDown"> إذا كنت تريد الإشتراك  للإبن  فالأوراق  المطلوبه صوره شخيص بالإضافه  شها\ة الميلاد على أن يكون غير متزوج </p>
<div style="height: 100px"></div>


                <div class="sing-img-text-left">
                    <div class="blog-right1">

                        <div class="categories">
                            <h5 style="color:#B32B2B" class="fa-stethoscope fa-2x">الطلبات الأساسيه للإشتراك في التأمين الصحي</h5>
                            <div class="clearfix"> </div>
                            
                        </div>
                    </div>
 <img src="/assets/img/slideshow/ss.png" alt="filler image" class="animate slideInDown">
 <div style="height: 100px"></div>
                </div>

 <img src="/assets/img/fillers/2.jpg" alt="filler image" class="animate slideInDown">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه اب </span></p></h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form action="/member" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                          
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label"><h4 style="color: #3D7A33 "> الاشتراك لاب </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="اب" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#3D7A33 "> رفع الصوره الشخصيه لاب</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#3D7A33 "> رفع صوره البطاقه الشخصيه ب</p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                          
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn-green">
                                        <i class="btn-green"></i>لاشتراك لاب 
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
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه عضويه ام</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/member" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    
                         <div class="form-group">
                             <label for="task-name" class="col-sm-3 control-label"><h4 style="color: #3D7A33 "> الاشتراك لام </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="ام" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#3D7A33 "> رفع الصوره الشخصيه لام</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#3D7A33 "> رفع صوره شهاده ميلاد المهندس</p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>
                      
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn-green">
                                    <i class="fa fa-btn fa-plus"></i>الاشتراك
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
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه عضويه لزوجه</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/member" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                     
                         <div class="form-group">
                             <label for="task-name" class="col-sm-3 control-label"><h4 style="color: #3D7A33 "> الاشتراك زوجه </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="زوجه" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#3D7A33 "> رفع الصوره الشخصيه لزوجه</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#3D7A33 "> رفع قسمه الزوج  </p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn-green">
                                    <i class="fa fa-btn fa-plus"></i>اضافه زوجه   </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
            
            
            
            <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه عضويه لابن</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/member" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                     
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label"><h4 style="color: #3D7A33 "> الاشتراك ابن </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="ابن" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#3D7A33 "> رفع الصوره الشخصيه لابن</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#3D7A33 "> رفع شهاده ميلاد لابن  </p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn-green">
                                    <i class="fa fa-btn fa-plus"></i>ابن
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
            
            
            
            
             <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه عضويه ابنه</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/member" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
1
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label"><h4 style="color: #3D7A33 "> الاشتراك ابنه </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="ابنه" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#3D7A33 "> رفع الصوره الشخصيه لابنه</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#3D7A33 ">اضافه شهاده ميلاد لابنه  </p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn-green">
                                    <i class="fa fa-btn fa-plus"></i> ابنه 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
            
            
            
            
            
            
            
    
  
    
    
                   <button type="button" class="btn-green" data-toggle="modal" data-target="#myModal">لاشتراك لاب<span class="glyphicon glyphicon-send"></span></button>
         <button type="button" class=" btn-green" data-toggle="modal" data-target="#myModal1">لاشتراك لام  <span class="glyphicon glyphicon-send"></span></button>
            <button type="button" class=" btn-green" data-toggle="modal" data-target="#myModal3">اضافه زوجه<span class="glyphicon glyphicon-send"></span></button>
            <button type="button" class=" btn-green" data-toggle="modal" data-target="#myModal4">اضافه ابن <span class="glyphicon glyphicon-send"></span></button>
               <button type="button" class=" btn-green" data-toggle="modal" data-target="#myModal5">لاشتراك لابنه<span class="glyphicon glyphicon-send"></span></button>

               
               
               <div style="height: 200px"></div>
</div>
            
            
            
            
</div>      
            
   <div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">

   
            <!-- End Copyright -->
        </div>
    </div>
</div>         
            
            
            
            
            
            
            
            


</div>


<script>
    jQuery(function () {
        jQuery('#myTab a:last').tab('show')
    })
</script>


