
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>@extends('employee.layout.master-employee')
@section('content')

<div class="row">
	<div class="col-sm-5">
		<h1 class="text-center">بيانات المهندس</h1>
		<div class="table-responsive">
			<table class=" table col-sm-12 teble-restrict">  
				<tr>
					<td>البيانات</td>
					<td></td>
				</tr>
				<tr>
					<td>رصيد المهندس</td>
					<td></td>
				</tr>
				<tr>
					<td>السماح بنوع التحليل او الأشعة</td>
					<td></td>
				</tr>
				<tr>
					<td><button id='ok' class="btn btn-success">السماح</button></td>
					<td><button id='cancel' class="btn btn-danger">الرفض</button></td>
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
					<td>
						{{Form::label(' رقم الريض ',' رقم الريض ',array('class' => 'style' ))}}
					</td>
					<td>
						{{ Form::text('patient_number', $transfer->patient_id,array('class'=>'form-control col-sm-8','disabled' ,'rows' => 3)) }}
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
						{{ Form::text('status', $transfer->status,array('class'=>'form-control col-sm-8','id'=>'status','disabled')) }}
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
				data : {"_token":"{{ csrf_token() }}","status": "yes","done": "yes"},
				beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
				success: function(responseData) {
					console.log('done');
					$('#status').val('تمت');
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
				data : {"_token":"{{ csrf_token() }}","status": "no","done": "yes"},
				beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
				success: function(responseData) {
					$('#status').val('لم تتم');
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

