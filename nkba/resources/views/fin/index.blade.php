@include('master')


    <div class="container content" >
        
   @if($message && $limit == "")      
<div class="alert alert-warning" style="height: 300px">
    
  <strong>Warning!</strong> {{$message}}.
      
</div>
    @endif

     @if ($limit && $message == "")
     <p> {{ $limit['0']->total_remainder }}</p>
     <p> {{ $limit['0']->surgery_credit }}</p>
     <p> {{ $limit['0']->analysis_credit }}</p>
     
     @endif

</div>































