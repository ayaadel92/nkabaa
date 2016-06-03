jQuery( document ).ready( function( $ ) {
	alert('done');
	function recieveTransfer() {
		$.ajax({
			url: {{ulr('employee-transfer')}},
			data: {_token:'{{csrf_token()}}'}
			success: function(responseData) {
				// $('#transfer').append('<div class="col-sm-12" style="background-color: rgba(255,51,9,0.2); height: 50px;">'+'transfer'+'</div>');

				// setTimeout(recieveTransfer,1000);
				alert('done');
			},
			error: function(err) {
				setTimeout(recieveTransfer,5000);
			}
		});
	}();


} );

alert('done');
	//alert('{/{ url('ajax') }}');
	function recieveTransfer() {
		alert('in function');
		$.ajax({
			url: '/ajax',
			type:"GET",
			success: function(responseData) {
				// $('#transfer').append('<div class="col-sm-12" style="background-color: rgba(255,51,9,0.2); height: 50px;">'+'transfer'+'</div>');

				// setTimeout(recieveTransfer,1000);
				alert('done');
			}
		});
	}
	recieveTransfer()

	/************************************************************/
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