@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				تعديل رصيد المهندس
			</header>
			<div class="panel-body">
				{{ Form::open(array('route' =>array( 'admin-limit.update',$limit->id), 'method' => 'put')) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('total_remainder', 'الرصيد الإجمالي') }}
							{{ Form::number('total_remainder', $limit->total_remainder , array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>
					<li>
						<div class="form-group">
							{{ Form::label('surgery_credit', 'رصيد العمليات') }}
							{{ Form::number('surgery_credit', $limit->surgery_credit , array('class' => 'form-control col-sm-6'))}}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('analysis_credit', 'رصيد الاشعة والتحاليل') }}
							{{ Form::number('analysis_credit', $limit->analysis_credit , array('class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('user_id', 'رقم العصو') }}
							<select id="user_id" name="user_id" class="form-control col-sm-7">
								@foreach($users as $user)
								@if( $user['id']  == $limit->user_id )
								<option value="{{ $user['id'] }}" selected>{{ $user['id'] }}</option>
								@endif
								<option value="{{ $user['id'] }}">{{ $user['id'] }}</option>
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
