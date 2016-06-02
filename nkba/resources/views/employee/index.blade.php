
<script src="//js.pusher.com/2.2/pusher.min.js"></script>
@extends('employee.layout.master-employee')
@section('content')

<section class="row">
	<div class="col-sm-4">

	</div>
	<div class="col-sm-8 transfer" id="transfer" value="hi">
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
						$('.transfers-list').append('<li class="list-group-item" id="' +data[i].created_at+'" ><a href="employee-transfer/'+data[i].id+'">تحويلة رقم ' +data[i].id+'</a></li>');
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

	// var pusher = new Pusher('{{ env("PUSHER_KEY")}}');
	// var channel = pusher.subscribe('event-tansfer');

	// channel.bind('App\Events\TransferEvent', function(data) {
	// 	console.log(data);
	// });
</script>
<style type="text/css">
	a{
		font-size: 24px;
		color: #808080;
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
		background-color: #999999;
		color: white;


	}
</style>

@endsection
