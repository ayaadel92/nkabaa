@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-fluid bg-1 text-center">
        <h2 class="margin">التحويلات</h2>
        <img src="../assets/images/b4.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="200">
    </div>
    </div>

<div class="container content" >
{{ Form::open(array('route' => 'transfer.store' ,'class'=>'well form-horizontal'))}}    
<fieldset>
<div class="table-responsive">
  <table class=" table col-sm-8 teble-restrict" style="margin-top:30px">  

    <tr>              
        <td>{{ Form::label ('ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ' ,'ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ',array('class' => 'style control-label ' ) ) }}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil">   </i>
                                                                                                     </span>
                    {{ Form::text('eng_id', null, array('required','class'=>'form-control col-sm-8')) }}
          </td>           
   </tr>

    <tr>      
          <td>{{Form::label(' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',array('class' => 'style' ) )}}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                 </span>
                    {{ Form::text('health_id', null,array('required','class'=>'form-control col-sm-8')) }}
          </td>
   </tr>

   <tr>      
          <td>{{Form::label(' اسم المريض ',' اسم المريض ',array('class' => 'style' ))}}</td>
          <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                          </span>
                    {{ Form::text('patient_name', null,array('required','class'=>'form-control col-sm-8')) }}
         </td>
   </tr>
               
   <tr>  
        <div class="form-group">      
             <td>{{Form::label(' درجة القرابة ',' درجة القرابة ',array('class' => 'style' ))}}</td>
              <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                      {{ Form::select('patient_type',['مهندس'=>'المهندس','زوجة'=>'زوجة','زوج'=>'زوج','الن'=>'ابن','ابنة'=>'ابنة','أب'=>'أب','أم'=>'أم'],'المهندس',array('required','class'=>'form-control col-sm-8')) }}
             </td>
     </div>
  </tr>   
 
 

<tr>      
  <td>{{Form::label(' التشخيص الطبى ',' التشخيص الطبى ',array('class' => 'style' ))}}</td>
  <td>
    {{ Form::textarea('medical_diagnosis', null,array('required','class'=>'form-control col-sm-9', 'rows' => 3)) }}</td>
  </tr>

  <tr>      
        <td>{{Form::label(' نوع التحويل',' نوع التحويل',array('class' => 'style' ))}}</td>
        <td  ><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                  <select id="type" name="type" class="form-control col-sm-8">
                                <option> نوع التحويل</option>
                                  <option value="1">أشعة</option>
                                  <option value="2">تحليل</option>
                  </select>
                              <br>
                  <select id="list" name="list" class="form-control col-sm-8">
                                <option>إختر نوع التحويل اولا</option>
                  </select>
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

    {{ Form::text('total_cost', null, array('required','class'=>'form-control col-sm-8')) }}
  </td>
</tr>            
<tr>      
  <td>{{Form::label(' قبول التحويل؟',' قبول التحويل؟',array('class' => 'style' ))}}</td>
  <td><span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i></span>

    {{ Form::select('accepted',['نعم'=>'لا'],'',array('class'=>'form-control col-sm-8','disabled')) }}
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
  <td > {{ Form::submit('إرسال التحويل',array('class'=>'btn btn-success  form-control col-sm-9 ','id'=>'submitbtn','name'=>'submit')) }}</td>
</tr>  

</table> 
</div>
</fieldset>
 
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


<script type="text/javascript">
  
$(document).ready(function($){
    $('#type').change(function(){
      $.get("{{ url('api/dropdown')}}", 
        { option: $(this).val() }, 
        function(data) {
          var list = $('#list');
          list.empty();
 
          $.each(data, function(index, element) {
                  list.append("<option value='"+ element.name +"'>" + element.name + "</option>");
              });
        });
    });
  });
</script>
@endsection
<script src="text/javascript">
  $(document).ready(function() {
    $('#submitbtn').on('click',function() {
      alert('hi');
    })
  })
</script>

