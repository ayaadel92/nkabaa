@extends('employee.layout.master-employee')
@section('content')

<div class="row">
	<div class="col-sm-5">
		<h1 class="text-center">بيانات المريض</h1><br>
		<div class="table-responsive">
			<table class=" table col-sm-12 teble-restrict">  
				<tr>
					<td>اسم المهندس</td>
					<td>{{ $msg1 }}</td>
				</tr>
				<tr>
					<td>السماح بالتحويل</td>
					<td>{{ $msg2 }}</td>
				</tr>
				<tr>
					<td><br><br><div class="text-center"> <button id='ok' class="btn btn-success pull-center">السماح</button></div></td>
					<td><br><br><div class="text-center"> <button id='cancel' class="btn btn-danger">الرفض</button></div></td>
				</tr>

			</table>
			

		</div>
	</div>

	<div class="col-sm-7" id="transfer"  style="background-color: rgba(7,51,9,0.2);">
		<h1 class="text-center">بيانات التحويلة</h1>
		<div class="table-responsive">
			<table class=" table col-sm-8 teble-restrict">  
				<tr>              
					<td>
						{{ Form::label ('ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ' ,'ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ',array('class' => 'style control-label' ) ) }}
					</td>
					<td>
						{{ Form::text('eng_id',  $transfer->eng_id ,array('class'=>'form-control col-sm-8' ,'disabled')) }}
					</td>           
				</tr>
				<tr>      
					<td>
						{{Form::label(' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',array('class' => 'style' ) )}}
					</td>
					<td>
						{{ Form::text('health_id',  $transfer->health_id ,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr>
				<tr>      
					<td>
						{{Form::label(' اسم المريض ',' اسم المريض ',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('patient_name',  $transfer->patient_name ,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr>
				<tr>  
					<div class="form-group">      
						<td>
							{{Form::label(' درجة القرابة ',' درجة القرابة ',array('class' => 'style' ))}}
						</td>
						<td>
							{{ Form::select('patient_type',['engineer'=>'المهندس','relative'=>'قريب'], $transfer->patient_type,array('class'=>'form-control col-sm-8','disabled')) }}
						</td>
					</div>
				</tr>   
				<tr>      
					<td>
						{{Form::label(' التشخيص الطبى ',' التشخيص الطبى ',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::textarea('medical_diagnosis', $transfer->medical_diagnosis,array('class'=>'form-control col-sm-9','disabled' ,'rows' => 3)) }}
					</td>
				</tr>
				<tr>      
					<td>
						{{Form::label(' نوع التحويل',' نوع التحويل',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::select('type',['rediopology'=>'أشعة','analysis'=>'تحليل'],$transfer->type,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr>
				<tr>      
					<td>
						{{Form::label(' اسم الطبيب ',' اسم الطبيب ',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('doctor_name', $transfer->doctor_name,array('disabled','class'=>'form-control col-sm-8')) }}
					</td>
				</tr>  
				<tr>      
					<td>
						{{Form::label(' اسم المستشفى ',' اسم المستشفى ',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('hospital_name', $transfer->hospital_name,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr> 
				<tr>      
					<td>
						{{Form::label(' اسم المعمل',' اسم المعمل',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('lab_name', $transfer->lab_name,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr> 
				<tr>      
					<td>
						{{Form::label(' التكلفة الكلية',' التكلفة الكلية',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('total_cost', $transfer->total_cost,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr>            
				<tr>      
					<td>
						{{Form::label(' قبول التحويل؟',' قبول التحويل؟',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('accepted', $transfer->accepted,array('class'=>'form-control col-sm-8','id'=>'accepted','disabled')) }}
					</td>
				</tr>
				<tr>      
					<td>
						{{Form::label(' نسبة مساهمة النقابة',' نسبة مساهمة النقابة',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('percentage', $transfer->percentage,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr>   
				<tr>      
					<td>
						{{Form::label(' التاريخ',' التاريخ',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::date('transfer_date', $transfer->transfer_date,array('class'=>'form-control col-sm-8','disabled')) }}
					</td>
				</tr>  
			</table> 
		</div>
	</div>

</div>
</div>
</div>

<script type="text/javascript">
	(function ($){
		// when accept the transfer
		$('#ok').on('click',function() {
			$.ajax({
				url: "{{route('employee-transfer.update',$transfer->id)}}",
				type : "PUT",
				data : {"_token":"{{ csrf_token() }}","accepted": "نعم","done": "نعم"},
				beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
				success: function(responseData) {
					console.log('done');
					$('#accepted').val('نعم');
				},
				error: function(err) {
					console.log('error');
				}
			})
		});
		// when accept the transfer
		$('#cancel').on('click',function() {
			$.ajax({
				url: "{{route('employee-transfer.update',$transfer->id)}}",
				type : "PUT",
				data : {"_token":"{{ csrf_token() }}","accepted": "لا","done": "نعم"},
				beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
				success: function(responseData) {
					$('#accepted').val('لا');
					console.log('done');
				},
				error: function(err) {
					console.log('error');
				}
			})
		});
	})(jQuery);
</script>

@endsection

