@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				إضافة رصيد مهندس
			</header>
			<div class="panel-body">
				{{ Form::open(array('route' => 'admin-limit.store')) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('total_remainder', 'الرصيد الإجمالي') }}
							{{ Form::number('total_remainder', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					<li>
						<div class="form-group">
							{{ Form::label('surgery_credit', 'رصيد العمليات') }}
							{{ Form::number('surgery_credit', null, array('class' => 'form-control col-sm-6'))}}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('analysis_credit', 'رصيد الاشعة والتحاليل') }}
							{{ Form::number('analysis_credit', null, array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('user_id', 'رقم العصو') }}
							<select id="user_id" name="user_id" class="form-control col-sm-7">
								<option>اختر الرقم</option>
								@foreach($users as $user)
								<option>{{ $user['id'] }}</option>
								@endforeach
							</select>
						</div>
					</li> 
					<li>
					<div style="height: 50px;"></div>
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