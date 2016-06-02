
@extends('employee.layout.master-employee')
@section('content')

<section class="row">
	<div class="col-sm-10 transfer" id="transfer" value="hi">
		<ul class="list-group transfers-list"></ul>
	</div>
</section>
<script>
	(function ($){
		
		function receiveTransfers() {
			var created;
			created = $('li').last().attr('id');
			
			if (!created) {created = 0;}
			$.ajax({
				url: "{{url('ajax')}}/"+created,
				type: "GET",
				success: function(data) {
					for (var i = 0; i < data.length; i++) {
						$('.transfers-list').append('<li class="list-group-item text-center" id="' +data[i].created_at+'" ><a class="tranlist" href="employee-transfer/'+data[i].id+'">تحويلة رقم ' +data[i].id+'</a></li>');
					}
					setTimeout(receiveTransfers,1000);
				},
				error: function(err) {
					setTimeout(receiveTransfers,5000);
				}
			})
		}
		receiveTransfers(); //call the function when the body load
	})(jQuery);

</script>
<style type="text/css">
	a{
		font-size: 24px;
		color: #5a9c39;
		font-weight: bold;
		text-decoration: none;  
		display: block;
	}
	li{
		margin: 20px;
	}
	a:hover ,a:focus{
		color: white;
		text-decoration: none;
	}

	li:hover , li:focus{
		background-color: #2c8d28;
		color: white;
	}
</style>

@endsection
