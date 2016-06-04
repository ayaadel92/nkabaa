@extends('transfer.master')

@section('content')
<section class="row">
  <div class="col-sm-10 col-sm-offset-1 transfer inner" id="transfer" value="hi">
    <ul class="list-group transfers-list"></ul>
  </div>
</section>
<script>
  (function ($){

    function receive_acceptance() {
      var updated;
      updated = $('li').last().attr('id');
      
      if (!updated) {updated= 0;}
      $.ajax({
        url: "{{url('ajax-response')}}/"+updated,
        type: "GET",
        success: function(data) {
          for (var i = 0; i < data.length; i++) {
            $('.transfers-list').append('<li class="list-group-item text-center" id="' +data[i].updated_at+'" ><a class="tranlist" href="transfer/'+data[i].id+'">تحويلة رقم ' +data[i].id+'</a></li>');
          }
          setTimeout(receive_acceptance,1000);
        },
        error: function(err) {
          setTimeout(receive_acceptance,5000);
        }
      })
    }
    receive_acceptance(); //call the function when the body load
  })(jQuery);

</script>
<style type="text/css">
  a{
    font-size: 24px;
    color: #1abc9c;
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
    background-color: #1abc9c;
    color: white;
  }
/*  .inner {
    width: 50%;
    margin: 50 ; 
}*/
</style>

@endsection