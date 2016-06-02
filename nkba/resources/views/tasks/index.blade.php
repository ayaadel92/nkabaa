@include('master')



<div class="about">
		<div class="container">
        <h3 class="tittle  pull-right">المواعيد ي </h3>
           <div class="clearfix"></div>
				<div class="about-top">
					<div class="col-md-7 about-top-right">
						<h4>ولان مواعيدك تهمنا حرصنا ان نخصص كشف مواعيد لامشتركين بخدمه </h4>
					</div>
					<div class="col-md-5 about-top-left">
						<img src="/assets/images/clock.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="clearfix"></div>
				</div>
        </div>
     </div>



<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Task
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->


                <!-- New Task Form -->
                <form action="/task" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label"><h4>Task</h4></label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                             <input type="date" name="date" id="task-name" class="form-control" value="{{ old('task') }}">
                               <input type="time" name="time" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        
         <button  id="show" class="hvr-shutter-in-horizontal more">عرض مواعيدك <span class= "glyphicon glyphicon-plus"> </span></button>
         
         
         
        <div id="hidden">
            <!-- Current Tasks -->
            @if (count($tasks) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th><p style="color:#000">Task</p></th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text"><div><p style='color:#000'>{{ $task->name }}</p></div></td>

                                <!-- Task Delete Button -->
                                <td>
                                    <form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>حذف 
                                        </button>
                                    </form>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">تعديل المعاد   <span class="glyphicon glyphicon-send"></span></button>

                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                </div>
                                                <div class="modal-body">

                                                    {!! Form::open(['route'=>['task.update',$task->id],'method'=>'put' ]) !!}

                                                    <div class="form-group">

                                                        <label for="exampleInputEmail1"> ادخل المعاد الجديد </label>
                                                        <input type="text" class="form-control" value="name" name="name">
                                                    </div>



                                                    <button type="submit" class="btn btn-default">edit</button>
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


    </script>

</div>


        <div class="clearfix"></div>
        <div class="clearfix"></div>       
        <div style="height:200px"></div>



        <div class="footer">
            <div class="container">

                <div class="footer-text">
                    <p>© ITI Graduation Project | Design by ITI</a> </p>
                </div>
            </div>
        </div>

<script>
//	(function ($){
//		$('#task-name').on('click',function(){
//			$.ajax({
//				url:'{{url("ajax")}}',
//				type: "GET",
//				success: function(data) {
//					$('#hidden').append();
//				}
//			})
//
//		})
//	})(jQuery);

	
	
</script>