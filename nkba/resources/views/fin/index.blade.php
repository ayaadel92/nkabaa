@include('master')


<div class="container content" >

    @if($message && $limit == ""&& $transfers == "")      
    <div class="alert alert-warning" style="height: 300px">

        <strong>Warning!</strong> {{$message}}.

    </div>
    @endif

    @if ($limit && $message == ""|| $transfers)
    <p style="color:#000 "> {{ $limit['0']->total_remainder }}</p>
    <p style="color:#000 "> {{ $limit['0']->surgery_credit }}</p>
    <p style="color:#000 "> {{ $limit['0']->analysis_credit }}</p>

  
    @foreach ($transfers as $transfer)
     <p style="color:#000 "> {{ $transfer->type }}</p>
     <p style="color:#000 "> {{ $transfer->transfer_date }}</p>
      <p style="color:#000 "> {{ $transfer->total_cost }}</p>
       <p style="color:#000 "> {{ $transfer->medical_diagnosis }}</p>
        <p style="color:#000 "> {{ $transfer->doctor_name }}</p>
         <p style="color:#000 "> {{ $transfer->hospital_name }}</p>
      <p style="color:#000 "> {{ $transfer->lab_name }}</p>

    @endforeach
    


    @endif

</div>































