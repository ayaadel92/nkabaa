@include('master')




<div class="col-md-9">




    <div style="height: 100px"></div> 
    <div style="margin-right: 0px" >
        <h3 style="color: #3D7A33 ;alignment-adjust: left">مواعيدك</h3>
        <br>
        <h5 style="color: #000"> تابع مواعيدك الشحصيه و مواعيد ادويتك دون نسيان </h5>
        <div style="height: 100px"></div> 
        <img src="/assets/img/fillers/Logo4.png" alt="filler image" style="height: 400px">
    </div>

    <!--     unnamed.png-->
    <!--<div class="col-md-8 ">
        
        <div style="height: 150px"></div> 
    </div>-->

    <!-- Display Validation Errors -->


    <div class="container" style="margin-top: 50px">
        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group animate swing">
                <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20px'> مسمي معادك:</p>  </label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>


                        <input type="text" name="name" id="task-name" class="col-sm-6" value="{{ old('task') }}">
                    </div>
                </div>
            </div>



            <div class="form-group animate swing">
                <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20px'> التاريخ:</p>  </label>  
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>


                        <input type="date" name="date" id="task-name" class="col-sm-6" value="{{ old('task') }}">

                    </div>
                </div>
            </div>    

            <div class="form-group animate swing">
                <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20px'> الوقت:</p>  </label>  
                <div class="col-md-8 inputGroupContainer">

                    <input type="time" name="time" id="task-name" class="col-sm-6" value="{{ old('task') }}">

                </div>
            </div>      


            <!-- Add Task Button -->
            <div class="form-group animate swing">
                <label class="col-md-4 control-label">  <p style='color: #339933 ;font-size: 20px'> اضافه:</p>  </label>  
                <div class="col-md-8 inputGroupContainer">

                    <button type="submit" class="btn-green" id="naaa">
                        <i class="fa fa-btn fa-plus"></i>Add Task
                    </button>
                </div>
            </div>
        </form>
        <button  id="show" class="btn-bronze">عرض مواعيدك <span class= "glyphicon glyphicon-plus"> </span></button>
    </div>





    <div id="hidden" class="col-md-9" style="width: 600px ; margin-top: 100px">
        <!-- Current Tasks -->
        @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                مواعيدك الحاليه
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <th><p style="color:#000">التاريخ</p></th>
                    <th><p style="color:#000">مواعيدك</p></th>
                 <th><p style="color:#000">الوقت</p></th>

                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text" style="width: 200px"><div><p style='color:#000'>{{ $task->name }}</p></div></td>
                            <td class="table-text" style="width: 200px"><div><p style='color:#000'>{{ $task->date }}</p></div></td>
                            <td class="table-text" style="width: 200px"><div><p style='color:#000'>{{ $task->time }}</p></div></td>

                            <!-- Task Delete Button -->
                            <td>
                                <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn-red">
                                        <i class="fa fa-btn fa-trash"></i>حذف 
                                    </button>
                                </form>

                            </td>
                            <td>
                                <button type="button" class="btn-green" data-toggle="modal" data-target="#myModal{{ $task->id}}" id="update-task-{{ $task->id}}">تعديل المعاد   <span class="glyphicon glyphicon-send"></span></button>

                                <div class="modal fade" id="myModal{{ $task->id}}" role="dialog">
                                    <div class="modal-dialog">

                                        Modal content
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                            </div>
                                            <div class="modal-body">

                                                {!! Form::model($task, [
                                                'method' => 'PUT',
                                                'route' => ['task.update', $task->id]
                                                ]) !!}

                                                <div class="form-group">
                                                    {!! Form::label('name', 'name:', ['class' => 'control-label']) !!}
                                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('date', 'date:', ['class' => 'control-label']) !!}
                                                    {!! Form::date('date', null, ['class' => 'form-control']) !!}
                                                </div>
                                                
                                                   <div class="form-group">
                                                    {!! Form::label('time', 'time:', ['class' => 'control-label']) !!}
                                                    {!! Form::time('time', null, ['class' => 'form-control']) !!}
                                                </div>

                                                {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

                                                {!! Form::close() !!}


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>

    <div style="height:200px"></div>
</div>
<div style="height:200px"></div>






</div>

<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">


        </div>
    </div>
</div>

<style>
    #hidden{
        display: none;
        width :1000px;
    }
</style>

<script>
    $(document).ready(function () {

//                                $('#custom_carousel').on('slide.bs.carousel', function (evt) {
//                                    $('#custom_carousel .controls li.active').removeClass('active');
//                                    $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
//                                });
        $("#show").click(function () {
            $("#hidden").toggle();

        });
    });

//   $(document).ready(function () {
//         $("#naaa").click(function () {
//             var form_data={
//                    	email: $("#email").val(),
//                    	password: $("#password").val()
//                    	
//                    };
//                    $.ajax({
//                       type: "POST",
//                       url: "http://localhost/phpproj/salafwsharebootstrap/public_html/loginajax.php",
//                       data: form_data,
//                       success: function(response)
//                       {
//                     
//                       	 if(response =="success")
//                       	 {  
//                       		window.location.href = 'http://localhost/phpproj/salafwsharebootstrap/public_html/index.php'
//                       	 }
//                       	else
//                       	{
//                       		$("#message").html(response);
//                       	}
//                        
//                       }
//         });
//         
//   }}


</script>
