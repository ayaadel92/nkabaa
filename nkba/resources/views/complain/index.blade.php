@include('master')

<div class="container">



    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-target="#home" data-toggle="tab">Home</a></li>
        <li><a data-target="#profile" data-toggle="tab">Profile</a></li>
        <li><a data-target="#messages" data-toggle="tab">Messages</a></li>

    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home">

            <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal">اضافه شكوي مستشفي <span class="glyphicon glyphicon-send"></span></button>

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
                                <form action="/complain" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}

                                    Task Name 
                                    <div class="form-group">
                                        <label for="task-name" class="col-sm-3 control-label"><h4>اضف شكوي علي مشفي</h4></label>

                                        <div class="col-sm-6">
                                            <input type="text" name="name_hosptail" id="task-name" class="form-control" >
                                        </div>
                                    </div>

                                    Add Task Button 
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-default">
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

        </div>



        <div class="tab-pane" id="profile">

            <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal1">اضافه شكوي دكتور <span class="glyphicon glyphicon-send"></span></button>

            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه شكوي دكتوري</span></p></h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <form action="/complain" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}

                                    Task Name 
                                    <div class="form-group">
                                        <label for="task-name" class="col-sm-3 control-label"><h4>اضف شكوي علي دكتور</h4></label>

                                        <div class="col-sm-6">
                                            <input type="text" name="name_doctor" id="task-name" class="form-control" >
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
        </div>





        <div class="tab-pane" id="messages"> 
    
              <button type="button" class=" hvr-shutter-in-horizontal more" data-toggle="modal" data-target="#myModal3">اضافه شكوي معمل او اشعه <span class="glyphicon glyphicon-send"></span></button>

            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"> <p style='color: #1abc9c'>   <span>اضافه شكويمعمل او اشعي</span></p></h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <form action="/complain" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}

                                    Task Name 
                                    <div class="form-group">
                                        <label for="task-name" class="col-sm-3 control-label"><h4>اضف شكوي علي معمل او اشع</h4></label>

                                        <div class="col-sm-6">
                                            <input type="text" name="name_lab" id="task-name" class="form-control" >
                                        </div>
                                    </div>

                                    Add Task Button 
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fa fa-btn fa-plus"></i>اضف شكوي علي معمل او اشع
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