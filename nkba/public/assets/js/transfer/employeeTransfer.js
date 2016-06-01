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