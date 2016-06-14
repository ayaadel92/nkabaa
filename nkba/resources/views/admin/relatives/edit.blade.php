@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				تعديل القريب
			</header>
			<div class="panel-body">
				<!-- 'files' => true to accept uploading photos -->
				{{ Form::open(array('route' =>array( 'admin-relative.update',$relative->id), 'method' => 'put', 'files' => true)) }}
				<ul>
					
					<li>
						<div class="form-group">
							{{ Form::label('name', 'الاسم') }}
							{{ Form::text('name', $relative->name, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('health_id', 'رقم البطاقة العﻻجية') }}
							{{ Form::text('health_id', $relative->health_id, array('class' => 'form-control col-sm-6'))}}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('eng_id', 'عضوية المهندس') }}
							{{ Form::text('eng_id',$relative->eng_id, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('birth_date', 'تاريخ الميﻻد') }}
							{{ Form::date('birth_date',$relative->birth_date, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li> 

					<li>
						<div class="form-group">
							{{ Form::label('gender', 'الجنس') }}<br>
							@if($relative->gender == 'male')
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
							{{ Form::label('relation_type', 'صلة القرابة') }}
							<select id="relation_type" name="relation_type" class="form-control">
								@foreach($relations as $relation)
								{{ $relation }}
								@if( $radio->relation  == $relation )
								<option selected>{{ $relation }}</option>
								@else
								<option>{{ $relation }}</option>
								@endif
								@endforeach
							</select>
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('status', 'تجديد الاشتراك') }}
							<select id="status" name="status" class="form-control">
								@foreach($statuses as $status)
								{{ $status }}
								@if( $radio->status  == $status )
								<option selected>{{ $status }}</option>
								@else
								<option>{{ $status }}</option>
								@endif
								@endforeach
							</select>
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('national_id', 'الرقم القومي') }}
							{{ Form::text('national_id', $relative->national_id, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('limit_id', 'رقم كشف الحساب') }}
							{{ Form::number('limit_id', $relative->limit_id, array('class' => 'form-control col-sm-7')) }}
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
