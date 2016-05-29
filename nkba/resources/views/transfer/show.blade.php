@extends('layouts.app')

@section('content')
   
<div class="table-responsive">
  <table class=" table col-sm-8 teble-restrict">  

    <tr>              
        <td>{{ Form::label ('ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ' ,'ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ',array('class' => 'style control-label' ) ) }}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil">   </i>
                                                                                                     </span>
                    {{ Form::text('eng_id',  $transfer_row->eng_id ,['readonly'], array('class'=>'form-control col-sm-8')) }}
          </td>           
   </tr>

    <tr>      
          <td>{{Form::label(' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',array('class' => 'style' ) )}}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                 </span>
                    {{ Form::text('health_id',  $transfer_row->health_id ,['readonly'],array('class'=>'form-control col-sm-8')) }}
          </td>
   </tr>

   <tr>      
          <td>{{Form::label(' اسم المريض ',' اسم المريض ',array('class' => 'style' ))}}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                          </span>
                    {{ Form::text('patient_name',  $transfer_row->patient_name ,['readonly'],array('class'=>'form-control col-sm-8')) }}
         </td>
   </tr>

   <tr>  
        <div class="form-group">      
             <td>{{Form::label(' درجة القرابة ',' درجة القرابة ',array('class' => 'style' ))}}</td>
              <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                      {{ Form::select('patient_type',['engineer'=>'المهندس','relative'=>'قريب'], $transfer_row->patient_type,['readonly'],array('class'=>'form-control col-sm-8')) }}
             </td>
     </div>
  </tr>   

  <tr>      
      <td>{{Form::label(' التشخيص الطبى ',' التشخيص الطبى ',array('class' => 'style' ))}}</td>
      <td>
          {{ Form::textarea('medical_diagnosis', $transfer_row->medical_diagnosis,['readonly'],array('class'=>'form-control col-sm-9', 'rows' => 3)) }}</td>
  </tr>

  <tr>      
        <td>{{Form::label(' نوع التحويل',' نوع التحويل',array('class' => 'style' ))}}</td>
        <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                  {{ Form::select('type',['rediopology'=>'أشعة','analysis'=>'تحليل'],$transfer_row->type,['readonly'],array('class'=>'form-control col-sm-8')) }}
        </td>
 </tr>

  <tr>      
        <td>{{Form::label(' اسم الطبيب ',' اسم الطبيب ',array('class' => 'style' ))}}</td>
        <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                       </span>
                  {{ Form::text('doctor_name', $transfer_row->doctor_name,['readonly'], ['class'=>'form-control col-sm-8']) }}
        </td>
  </tr>  

   <tr>      
        <td>{{Form::label(' اسم المستشفى ',' اسم المستشفى ',array('class' => 'style' ))}}</td>
        <td ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                </span>
                  {{ Form::text('hospital_name', $transfer_row->hospital_name,['readonly'], ['class'=>'form-control col-sm-8']) }}
        </td>
 </tr> 

 <tr>      
      <td>{{Form::label(' اسم المعمل',' اسم المعمل',array('class' => 'style' ))}}</td>
      <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>
                {{ Form::text('lab_name', $transfer_row->lab_name, ['readonly'],['class'=>'form-control col-sm-8']) }}
      </td>
</tr> 

<tr>      
    <td>{{Form::label(' التكلفة الكلية',' التكلفة الكلية',array('class' => 'style' ))}}</td>
    <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>

              {{ Form::text('total_cost', $transfer_row->total_cost,['readonly'], ['class'=>'form-control col-sm-8']) }}
    </td>
</tr>            
<tr>      
    <td>{{Form::label(' قبول التحويل؟',' قبول التحويل؟',array('class' => 'style' ))}}</td>
    <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i></span>

              {{ Form::text('status', $transfer_row->status,['readonly'],['class'=>'form-control col-sm-8']) }}
    </td>
</tr>

<tr>      
      <td>{{Form::label(' نسبة مساهمة النقابة',' نسبة مساهمة النقابة',array('class' => 'style' ))}}</td>
      <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>

                {{ Form::text('percentage', $transfer_row->percentage,['readonly'], ['class'=>'form-control col-sm-8']) }}
      </td>
</tr>   

<tr>      
    <td>{{Form::label(' التاريخ',' التاريخ',array('class' => 'style' ))}}</td>
    <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-calendar"></i>
                                                                                     </span>
              {{ Form::date('transfer_date', $transfer_row->transfer_date,['readonly'], ['class'=>'form-control col-sm-8']) }}
    </td>
</tr>  

 

</table> 
</div>

    </div>
</div>

@endsection