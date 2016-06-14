@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				إضافة قريب
			</header>
			<div class="panel-body">
				<!-- 'files' => true to accept uploading photos -->
				{{ Form::open(array('route' => 'admin-relative.store', 'files' => true)) }}
				<ul>
				{{-- `id`, `status`, `name`, `health_id`, `eng_id`, `birth_date`, `gender`, `relation_type`, `national_id`, `path`, `limit_id`, `created_at`, `updated_at`, `user_id` --}}
					<li>
						<div class="form-group">
							{{ Form::label('name', 'الاسم') }}
							{{ Form::text('name', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('health_id', 'رقم البطاقة العﻻجية') }}
							{{ Form::text('health_id', null, array('class' => 'form-control col-sm-6'))}}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('eng_id', 'عضوية المهندس') }}
							{{ Form::text('eng_id',null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('birth_date', 'تاريخ الميﻻد') }}
							{{ Form::date('birth_date',null, array('class' => 'form-control col-sm-7')) }}
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
							{{ Form::label('relation_type', 'صلة القرابة') }}
							{{ Form::select('relation_type',['اب'=>'اب','ام'=>'ام','ابن'=>'ابن','ابنه'=>'ابنه','زوج'=>'زوج','زوجه'=>'زوجه'],null,array('required','class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('status', 'تجديد الاشتراك') }}
							{{ Form::select('status',['نعم'=>'نعم','لا'=>'لا'],null,array('required','class' => 'form-control')) }}
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
							{{ Form::label('limit_id', 'رقم كشف الحساب') }}
							{{ Form::number('limit_id', null, array('class' => 'form-control col-sm-7')) }}
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