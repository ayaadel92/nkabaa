@extends('transfer.master')

@section('content')

<div class="table-responsive">
  <table class=" table col-sm-8 teble-restrict">  

    <tr>              

      <td>{{ Form::label ('ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ' ,'ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ',array('class' => 'style control-label' ) ) }}</td>
      <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil">   </i>
      </span>
      {{ Form::text('eng_id',  $transfer_row->eng_id ,array('class'=>'form-control col-sm-8' ,'disabled')) }}
    </td>           
  </tr>

  <tr>      
    <td>{{Form::label(' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',array('class' => 'style' ) )}}</td>
    <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
    </span>
    {{ Form::text('health_id',  $transfer_row->health_id ,array('class'=>'form-control col-sm-8','disabled')) }}
  </td>
</tr>

<tr>      
  <td>{{Form::label(' اسم المريض ',' اسم المريض ',array('class' => 'style' ))}}</td>
  <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
  </span>
  {{ Form::text('patient_name',  $transfer_row->patient_name ,array('class'=>'form-control col-sm-8','disabled')) }}
</td>
</tr>

<tr>  
  <div class="form-group">      
   <td>{{Form::label(' درجة القرابة ',' درجة القرابة ',array('class' => 'style' ))}}</td>
   <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
   </span>
   {{ Form::text('patient_type', $transfer_row->patient_type,array('class'=>'form-control col-sm-8','disabled')) }}
 </td>
</div>
</tr>   

<tr>      
  <td>{{Form::label(' التشخيص الطبى ',' التشخيص الطبى ',array('class' => 'style' ))}}</td>
  <td>
    {{ Form::textarea('medical_diagnosis', $transfer_row->medical_diagnosis,array('class'=>'form-control col-sm-9','disabled' ,'rows' => 3)) }}</td>
  </tr>

  <tr>      
    <td>{{Form::label(' نوع التحويل',' نوع التحويل',array('class' => 'style' ))}}</td>
    <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
    </span>
    {{ Form::select('type',['rediopology'=>'أشعة','analysis'=>'تحليل'],$transfer_row->type,array('class'=>'form-control col-sm-8','disabled')) }}
  </td>
</tr>
<tr>      
  <td>{{Form::label(' اسم التحليل ',' اسم التحليل ',array('class' => 'style' ))}}</td>
  <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
  </span>
  {{ Form::text('list', $transfer_row->type_name,array('disabled','class'=>'form-control col-sm-8')) }}
</td>
</tr>


<tr>      
  <td>{{Form::label(' اسم الطبيب ',' اسم الطبيب ',array('class' => 'style' ))}}</td>
  <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
  </span>
  {{ Form::text('doctor_name', $transfer_row->doctor_name,array('disabled','class'=>'form-control col-sm-8')) }}
</td>
</tr>  

<tr>      
  <td>{{Form::label(' اسم المستشفى ',' اسم المستشفى ',array('class' => 'style' ))}}</td>
  <td ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
  </span>
  {{ Form::text('hospital_name', $transfer_row->hospital_name,array('class'=>'form-control col-sm-8','disabled')) }}
</td>
</tr> 

<tr>      
  <td>{{Form::label(' اسم المعمل',' اسم المعمل',array('class' => 'style' ))}}</td>
  <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>
    {{ Form::text('lab_name', $transfer_row->lab_name,array('class'=>'form-control col-sm-8','disabled')) }}
  </td>
</tr> 

<tr>      
  <td>{{Form::label(' التكلفة الكلية',' التكلفة الكلية',array('class' => 'style' ))}}</td>
  <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>

    {{ Form::text('total_cost', $transfer_row->total_cost,array('class'=>'form-control col-sm-8','disabled')) }}
  </td>
</tr>            
<tr>      
  <td>{{Form::label(' قبول التحويل؟',' قبول التحويل؟',array('class' => 'style' ))}}</td>
  <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i></span>

    {{ Form::text('accepted', $transfer_row->accepted,array('class'=>'form-control col-sm-8','readonly')) }}
  </td>
</tr>

<tr>      
  <td>{{Form::label(' نسبة مساهمة النقابة',' نسبة مساهمة النقابة',array('class' => 'style' ))}}</td>
  <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>

    {{ Form::text('percentage', $transfer_row->percentage,array('class'=>'form-control col-sm-8','disabled')) }}
  </td>
</tr>   

<tr>      
  <td>{{Form::label(' التاريخ',' التاريخ',array('class' => 'style' ))}}</td>
  <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-calendar"></i>
  </span>
  {{ Form::date('transfer_date', $transfer_row->transfer_date,array('class'=>'form-control col-sm-8','disabled')) }}
</td>
</tr>  
</table> 
</div>
<div>
  <button class="btn btn-info" type="button" id="con">Confirm</button>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function($){
    $('#con').click(function(){
      $.ajax({
        url: '{{ url('transfer-confirm', $transfer_row->id)}}',
        type:  'GET'
      });
    });
  });
</script>
@endsection

