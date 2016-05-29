@extends('layouts.app')

@section('content')
{{ Form::open(array('route' => 'transfer.store' ))}}    
<div class="table-responsive">
  <table class=" table col-sm-8 teble-restrict">  

    <tr>              
        <td>{{ Form::label ('ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ' ,'ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ',array('class' => 'style control-label' ) ) }}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil">   </i>
                                                                                                     </span>
                    {{ Form::text('eng_id', null, array('class'=>'form-control col-sm-8')) }}
          </td>           
   </tr>

    <tr>      
          <td>{{Form::label(' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',array('class' => 'style' ) )}}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                 </span>
                    {{ Form::text('health_id', null,array('class'=>'form-control col-sm-8')) }}
          </td>
   </tr>

   <tr>      
          <td>{{Form::label(' اسم المريض ',' اسم المريض ',array('class' => 'style' ))}}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                          </span>
                    {{ Form::text('patient_name', null,array('class'=>'form-control col-sm-8')) }}
         </td>
   </tr>

   <tr>  
        <div class="form-group">      
             <td>{{Form::label(' درجة القرابة ',' درجة القرابة ',array('class' => 'style' ))}}</td>
              <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                      {{ Form::select('patient_type',['engineer'=>'المهندس','relative'=>'قريب'],'المهندس',array('class'=>'form-control col-sm-8')) }}
             </td>
     </div>
  </tr>   

  <tr>      
      <td>{{Form::label(' التشخيص الطبى ',' التشخيص الطبى ',array('class' => 'style' ))}}</td>
      <td>
          {{ Form::textarea('medical_diagnosis', null,array('class'=>'form-control col-sm-9', 'rows' => 3)) }}</td>
  </tr>

  <tr>      
        <td>{{Form::label(' نوع التحويل',' نوع التحويل',array('class' => 'style' ))}}</td>
        <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                  {{ Form::select('type',['rediopology'=>'أشعة','analysis'=>'تحليل'],'analysis',array('class'=>'form-control col-sm-8')) }}
        </td>
 </tr>

  <tr>      
        <td>{{Form::label(' اسم الطبيب ',' اسم الطبيب ',array('class' => 'style' ))}}</td>
        <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                       </span>
                  {{ Form::text('doctor_name', null, ['class'=>'form-control col-sm-8']) }}
        </td>
  </tr>  

   <tr>      
        <td>{{Form::label(' اسم المستشفى ',' اسم المستشفى ',array('class' => 'style' ))}}</td>
        <td ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                </span>
                  {{ Form::text('hospital_name', null, ['class'=>'form-control col-sm-8']) }}
        </td>
 </tr> 

 <tr>      
      <td>{{Form::label(' اسم المعمل',' اسم المعمل',array('class' => 'style' ))}}</td>
      <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>
                {{ Form::text('lab_name', null, ['class'=>'form-control col-sm-8']) }}
      </td>
</tr> 

<tr>      
    <td>{{Form::label(' التكلفة الكلية',' التكلفة الكلية',array('class' => 'style' ))}}</td>
    <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>

              {{ Form::text('total_cost', null, ['class'=>'form-control col-sm-8']) }}
    </td>
</tr>            
<tr>      
    <td>{{Form::label(' قبول التحويل؟',' قبول التحويل؟',array('class' => 'style' ))}}</td>
    <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i></span>

              {{ Form::text('status',null,['class'=>'form-control col-sm-8']) }}
    </td>
</tr>

<tr>      
      <td>{{Form::label(' نسبة مساهمة النقابة',' نسبة مساهمة النقابة',array('class' => 'style' ))}}</td>
      <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>

                {{ Form::text('percentage', null, ['class'=>'form-control col-sm-8']) }}
      </td>
</tr>   

<tr>      
    <td>{{Form::label(' التاريخ',' التاريخ',array('class' => 'style' ))}}</td>
    <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-calendar"></i>
                                                                                     </span>
              {{ Form::date('transfer_date', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-8']) }}
    </td>
</tr>  

  <tr>      
        <td></td>
        <td > {{ Form::submit('إرسال التحويل',array('class'=>'btn btn-success  form-control col-sm-9 ')) }}</td>
  </tr>  

</table> 
</div>
    {{Form::close()}}

    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<button class="btn btn-info" onclick="
@if (Session::has('notifier.notice'))
$.pnotify({
  title:' {{Session::get('notifier.title')}}' ,
  text: '{{Session::get('notifier.text')}}',
  type:'info'
}); 
@endif ">notify</button> 


@endsection