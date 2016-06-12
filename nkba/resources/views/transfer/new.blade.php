@extends('transfer.master')

@section('content')
<div class="container">
  <div class="container-fluid bg-1 text-center">
    <h3 class="margin">التحويلات</h3>
    <img src="../assets/images/12.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="420" height="200">
  </div>
</div>

<div class="container content" >
  {{ Form::open(array('route' => 'transfer.store' ,'class'=>'well form-horizontal'))}}    
  <div class="row">
  <div class="col-sm-12">
  <div class="col-sm-2">
    {{ Form::label ('ﺭﻗﻢ العضوية ' ,'ﺭﻗﻢ العضوية ',array('class' => 'style control-label ' ) ) }}</div>
<div class="col-sm-10">
<span class="input-group-addon col-sm-1"><i class="glyphicon glyphicon-pencil"></i> </span>
  {{ Form::text('eng_id', null, array('required','class'=>'form-control col-sm-5 member','oninvalid'=>"setCustomValidity('أدخل رقم العضوية ')",'onchange'=>"try{setCustomValidity('')}catch(e){}")) }}  </div>
  </div></div>
<div class="row">
  <div class="col-sm-12">
  <div class="col-sm-2">
   {{Form::label(' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',array('class' => 'style' ) )}}</div>
   <div class="col-sm-10">
        <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
        </span>
        {{ Form::text('health_id', null,array('required','class'=>'form-control col-sm-5 card','readonly','oninvalid'=>"setCustomValidity('أدخل رقم البطاقة الصحية ')",'onchange'=>"try{setCustomValidity('')}catch(e){}")) }}
        </div>
        </div></div>
        <div class="row">
          <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' اسم المريض ',' اسم المريض ',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
      <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
      </span>
      {{ Form::text('patient_name', null,array('required','class'=>'form-control col-sm-5','oninvalid'=>"setCustomValidity('أدخل اسم امريض ')",'onchange'=>"try{setCustomValidity('')}catch(e){}")) }}
 </div>
 </div></div>
 <div class="row"> 
           <div class="col-sm-12">
  <div class="col-sm-2">    
{{Form::label(' درجة القرابة ',' درجة القرابة ',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
  <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i></span>
             <select id="degree" name="degree" class="form-control col-sm-5">
          <option value="1"> مهندس/مهندسة</option>
          <option value="2">زوجه</option>
          <option value="3">زوج</option>
           <option value="4">ابن</option>
          <option value="5">ابنه</option>
           <option value="5">اب</option>
          <option value="7">ام</option>                  
        </select>

 </div>
 </div></div>
 <div class="row">
            <div class="col-sm-12">
  <div class="col-sm-2"> 
{{Form::label(' التشخيص الطبى ',' التشخيص الطبى ',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
    {{ Form::textarea('medical_diagnosis', null,array('required','class'=>'form-control col-sm-6', 'rows' => 3,'oninvalid'=>"setCustomValidity('أدخل التشخيص الطبى ')",'onchange'=>"try{setCustomValidity('')}catch(e){}")) }}</div></div></div>
    <div class="row">
                <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' نوع التحويل',' نوع التحويل',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
<span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
    </span>
    <select id="type" name="type" class="form-control col-sm-5">
      <option> نوع التحويل</option>
      <option value="1">أشعة</option>
      <option value="2">تحليل</option>
    </select>
</div></div></div>
<div class="row">
                <div class="col-sm-12">
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
  <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i>
    </span>
    <select id="list" name="list" class="form-control col-sm-5 ">
      <option>إختر نوع التحويل اولا</option>
    </select></div></div></div>
    <div class="row">
                    <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' اسم الطبيب ',' اسم الطبيب ',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
<span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
  </span>
  {{ Form::text('doctor_name', null, ['class'=>'form-control col-sm-5']) }}</div></div></div>
  <div class="row">
                      <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' اسم المستشفى ',' اسم المستشفى ',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
 <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i>
  </span>
  {{ Form::text('hospital_name', null, ['class'=>'form-control col-sm-5']) }}</div></div></div>
  <div class="row">
                        <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' اسم المعمل',' اسم المعمل',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
 <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>
    {{ Form::text('lab_name', null, ['class'=>'form-control col-sm-5']) }}</div></div></div>
    <div class="row">
                            <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' التكلفة الكلية',' التكلفة الكلية',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
  <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>
    {{ Form::number('total_cost', null, array('required','class'=>'form-control col-sm-5','oninvalid'=>"setCustomValidity('أدخل التكلفة الكلية ')",'onchange'=>"try{setCustomValidity('')}catch(e){}")) }}</div></div></div>
    <div class="row">
                                <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' قبول التحويل؟',' قبول التحويل؟',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
<span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-th-list"></i></span>
    {{ Form::text('accepted',null,array('class'=>'form-control col-sm-5','readonly')) }}</div></div></div>
    <div class="row">
                                    <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' نسبة مساهمة النقابة',' نسبة مساهمة النقابة',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
<span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-pencil"></i></span>
    {{ Form::text('percentage', ' ', array('class'=>'form-control col-sm-5 percentage','readonly')) }}</div></div></div>
    <div class="row">
                                        <div class="col-sm-12">
  <div class="col-sm-2">
{{Form::label(' التاريخ',' التاريخ',array('class' => 'style' ))}}</div>
<div class="col-sm-10">
  <span class="input-group-addon  col-sm-1"><i class="glyphicon glyphicon-calendar"></i>
  </span>
  {{ Form::date('transfer_date', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-5']) }}</div></div></div>
<div class="row">
                                        <div class="col-sm-12">
  <div class="col-sm-2">
{{ Form::submit('إرسال التحويل',array('class'=>'btn btn-success  form-control col-sm-5 ','name'=>'submit')) }}</div>


{{Form::close()}}

</div>


<!-- script to get analysis and radios
 --><script type="text/javascript">
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

<!-- script to get percentages
 -->
 <script type="text/javascript">
  $(document).ready(function($){
    $('#degree').change(function(){
      $.get("{{ url('api/degree')}}", 
        { option: $(this).val() }, 
        function(data) {
          var percent = $('.percentage');
          $.each(data, function(index, element) {
            percent.val(element.percent);
          });
        });
    });
  });
</script>

<!-- ajax to auto fill card-id
 -->
 <script type="text/javascript">
  $(document).ready(function($){
    var mem=$('.member').val();
    $('.member').blur(function(){
      console.log('here')
      $.ajax({
        url:"{{url('api/card')}}?id="+$('.member').val(),
        type: "GET"
      }).success(function(data){
          var card_id = $('.card');
          $.each(data, function(index, element) {
          card_id.val(element.health_id);
      })
 });
    })
  });

</script>
@endsection


