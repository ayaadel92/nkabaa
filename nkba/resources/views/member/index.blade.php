@include('master')

<div class="container content" >
    <div class="container">
        <h3 class="tittle  pull-right">الاشتراك في التامين الصحي </h3>
        <div class="clearfix"></div>
        <div class="about-top">
            <div class="col-md-7 about-top-right">
                <h4>المطلبات الاساسيه الاشتراك في التامين الصحي </h4>
                <p> اذا كنت تريد الاشتراك لوالد فأورق المطلوبه صوره لشخص بالضافه الي صوره البطاقه  </p>
                <p> اذا كنت تريد الاشتراك   الوالده  فأورق المطلوبه صوره لشخص بالضافه الي شهاده الميلاد </p>
                <p> اذا كنت تريد الاشتراك الابن  فأورق المطلوبه صوره لشخص بالضافه الي شهاده الميلاد  علي ان يكون اقل من سن التخرج</p>
                <p> اذا كنت تريد الاشتراك الابنه فاورق  المطلوبه صوره لشخص بالضافه الي شهاده الميلاد علي ان يكون غير متزوجه</p>
                <p> اذا كنت تريد الاشتراك  الزوجهه و الزوج  فاورق  المطلوبه صوره لشخص بالضافه الي شهاده الميلاد علي ان يكون غير متزوجه</p>



                <div class="sing-img-text-left">
                    <div class="blog-right1">

                        <div class="categories">
                            <h3 class="tittle  pull-right">قائمه الاسعار  </h3>
                            <div class="clearfix"> </div>
                            <ul>
                                <li >الاشتراك لزوجه 140 </li>
                                <li> الاشتراك لزوجه 140 </li>
                                <li>الاشتراك لزوجه 140 </li>
                                <li>الاشتراك لزوجه 140 </li>
                                <li>الاشتراك لزوجه 140 </li>
                                <li>الاشتراك لزوجه 140 </li>
                            </ul>
                        </div>
                    </div>

                </div>
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

                            Task Name 
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label"><h4> الاشتراك لاب </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="اب" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#000"> رفع الصوره الشخصيه لاب</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#000"> رفع صوره البطاقه الشخصيه ب</p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                            Add Task Button 
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>لاشتراك لاب 
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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

                        Task Name 
                         <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label"><h4> الاشتراك لام </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="ام" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#000"> رفع الصوره الشخصيه لام</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#000"> رفع صوره شهاده ميلاد المهندس</p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>
                        Add Task Button 
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
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
                <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه عضويه لزوجه</span></p></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form action="/member" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        Task Name 
                         <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label"><h4> الاشتراك زوجه </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="زوجه" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#000"> رفع الصوره الشخصيه لزوجه</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#000"> رفع قسمه الزوج  </p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                        Add Task Button 
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
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

                        Task Name 
                    <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label"><h4> الاشتراك ابن </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="ابن" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#000"> رفع الصوره الشخصيه لابن</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#000"> رفع شهاده ميلاد لابن  </p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                        Add Task Button 
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
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

                        Task Name 
                    <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label"><h4> الاشتراك ابنه </h4></label>

                                <div class="col-sm-6">
                                    <input type="text" name="father" value="ابنه" id="task-name" class="form-control" readonly="" >
                                  
                                    <p style="color:#000"> رفع الصوره الشخصيه لابنه</p>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <p style="color:#000">اضافه شهاده ميلاد لابنه  </p>
                                     <input type="file" name="fileToUpload1" id="fileToUpload">
                                </div>
                            </div>

                        Add Task Button 
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
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
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
</div>

</div>


<script>
    jQuery(function () {
        jQuery('#myTab a:last').tab('show')
    })
</script>
</div>

<div class="container">
    <ul class="timeline">
        <li>
          <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
              
               <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal">لاشتراك لاب<span class="glyphicon glyphicon-send"></span></button>

          </div>
        </li>
        
        <li>
          <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
          <div class="timeline-panel">
         <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal1">لاشتراك لام  <span class="glyphicon glyphicon-send"></span></button>

          </div>
        </li>
        
        <li>
          <div class="timeline-badge warning"><i class="fa fa-sun-o"></i></div>
          <div class="timeline-panel">
            <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal3">اضافه زوجه<span class="glyphicon glyphicon-send"></span></button>

          </div>
        </li>
     
        
            <li>
          <div class="timeline-badge warning"><i class="fa fa-sun-o"></i></div>
          <div class="timeline-panel">
            <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal4">اضافه ابن <span class="glyphicon glyphicon-send"></span></button>

          </div>
        </li>
        
        
        <li>
          <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
              
               <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal5">لاشتراك لابنه<span class="glyphicon glyphicon-send"></span></button>

          </div>
        </li>
     
    </ul>
</div>


















<div style="height:200px"></div>



<div class="footer">
    <div class="container">

        <div class="footer-text">
            <p>© ITI Graduation Project | Design by ITI</a> </p>
        </div>
    </div>
</div>
<style>
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