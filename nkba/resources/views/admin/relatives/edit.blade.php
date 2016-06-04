@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				تعديل المهندس
			</header>
			<div class="panel-body">
				<!-- 'files' => true to accept uploading photos -->
				{{ Form::open(array('route' =>array( 'admin-engineer.update',$engineer->id), 'method' => 'put', 'files' => true)) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('name', 'الاسم') }}
							{{ Form::text('name', $engineer->name, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('email', 'الإيميل') }}
							{{ Form::email('email', $engineer->email, array('class' => 'form-control col-sm-6'))}}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('password', 'الباسوورد') }}
							{{ Form::password('password', array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('password', 'تأكيد الباسوورد') }}
							{{ Form::password('password_confirmation', array('class' => 'form-control col-sm-7')) }}
						</div>
					</li> 

					<li>
						<div class="form-group">
							{{ Form::label('gender', 'الجنس') }}<br>
							@if($engineer->gender == 'male')
							{{ Form::radio('gender','male', true) }}ذكر
							{{ Form::radio('gender', 'female') }}أنثى
							@else
							{{ Form::radio('gender','male') }}ذكر
							{{ Form::radio('gender', 'female', true) }}أنثى
							@endif
							
						</div>
					</li>       

					<li>
						<div class="form-group">
							{{ Form::label('address', 'العنوان') }}
							{{ Form::text('address', $engineer->address, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('phone_number', 'الموبايل') }}
							{{ Form::text('phone_number', $engineer->phone_number, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('birth_date', 'تاريخ الميلاد') }}
							{{ Form::date('birth_date' , $engineer->birth_date, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('gradu_year', 'سنة التخرج') }}
							{{ Form::text('gradu_year', $engineer->gradu_year, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('relative_num', 'عدد الأقارب') }}
							{{ Form::number('relative_num', $engineer->relative_num, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('national_id', 'الرقم القومي') }}
							{{ Form::text('national_id', $engineer->national_id, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('eng_id', 'رقم العضوية') }}
							{{ Form::text('eng_id', $engineer->eng_id, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('health_id', 'رقم التأمين') }}
							{{ Form::text('health_id', $engineer->health_id, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('credit_number', 'رقم حساب مصرفي') }}
							{{ Form::text('credit_number', $engineer->credit_number, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					

					<li>
						<div class="form-group">
							{{ Form::label('path', 'اختر صورة') }}
							{{ Form::file('path', array('class' => 'btn btn-warning form-control')) }}
						</div>
					</li>


					<li>
						{{ Form::submit('تعديل', array('class' => 'btn btn-info form-control')) }}
					</li>
				</ul>
				{{ Form::close() }}

				@if ($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error" style="color: red;">:message</li>')) }}
				</ul>
				@endif
				@if(Session::has('flash_message'))
				<div class="alert alert-success">
					{{ Session::get('flash_message') }}
				</div>
				@endif
			</div>
		</section>
	</div>
</div>

@endsection
