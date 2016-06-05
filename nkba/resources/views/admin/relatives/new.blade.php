@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				إضافة مهندس
			</header>
			<div class="panel-body">
				<!-- 'files' => true to accept uploading photos -->
				{{ Form::open(array('route' => 'admin-engineer.store', 'files' => true)) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('name', 'الاسم') }}
							{{ Form::text('name', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('email', 'الإيميل') }}
							{{ Form::email('email', null, array('class' => 'form-control col-sm-6'))}}
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
							{{ Form::radio('gender','male', true) }}ذكر
							{{ Form::radio('gender', 'female') }}أنثى
						</div>
					</li>       

					<li>
						<div class="form-group">
							{{ Form::label('address', 'العنوان') }}
							{{ Form::text('address', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('phone_number', 'الموبايل') }}
							{{ Form::text('phone_number', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('birth_date', 'تاريخ الميلاد') }}
							{{ Form::date('birth_date' ,null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('gradu_year', 'سنة التخرج') }}
							{{ Form::text('gradu_year', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('relative_num', 'عدد الأقارب') }}
							{{ Form::number('relative_num', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('national_id', 'الرقم القومي') }}
							{{ Form::text('national_id', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('eng_id', 'رقم العضوية') }}
							{{ Form::text('eng_id', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('health_id', 'رقم التأمين') }}
							{{ Form::text('health_id', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('credit_number', 'رقم حساب مصرفي') }}
							{{ Form::text('credit_number', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('path', 'اختر صورة') }}
							{{ Form::file('path', array('class' => 'btn btn-warning form-control')) }}
						</div>
					</li>


					<li>
						{{ Form::submit('أضافة', array('class' => 'btn btn-info form-control')) }}
					</li>
				</ul>
				{{ Form::close() }}

				@if ($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>')) }}
				</ul>
				@endif
			</div>
		</section>
	</div>
</div>

@endsection