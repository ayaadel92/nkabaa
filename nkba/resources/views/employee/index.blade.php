
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>@extends('employee.layout.master-employee')
@section('content')

<section class="row">
	<div class="col-sm-4" style="background-color: rgba(250,69,62,0.3); height: 500px;">

	</div>
	<div class="col-sm-8" id="transfer"  style="background-color: rgba(7,51,9,0.2); height: 500px;">

	</div>
	<button type="button" class="btn btn-warning" id="getRequest" onclick="function hi() {
		alert('$(this).text()');
	}"> get request </button>

	
</section>
<script>
	(function ($){
		$('#getRequest').on('click',function(){
			$.ajax({
				url:'{{url("ajax")}}',
				type: "GET",
				success: function(data) {

					alert(data[0].done);
					$('#transfer').append('<ul class="list-group">'+
						'<li class="list-group-item"><a href="employee-transfer/'+data[0].id+'">تحويلة رقم </a></li>'+
						'</ul>');
				}
			})

		})
	})(jQuery);

	
	
</script>
<style type="text/css">
	a{
		font-size: 24px;
		color: #808080;
		font-weight: bold;
		text-decoration: none;  
		display: block;


	}
	a:hover ,a:focus{
		color: white;
		text-decoration: none;
	}


	li:hover , li:focus{
		background-color: #999999;
		color: white;


	}
</style>

@endsection
