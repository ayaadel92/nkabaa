@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				تعديل  الأشعة أو التحليل
			</header>
			<div class="panel-body">
				{{ Form::open(array('route' =>array( 'admin-radio.update',$radio->id), 'method' => 'put')) }}					
				<div class="form-group">
					{{ Form::label('name', 'الاسم') }}
					{{ Form::text('name', $radio->name, array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('type', 'النوع') }}
					<select id="type" name="type" class="form-control">
						@foreach($types as $type)
						{{ $type }}
						@if( $radio->type  == $type )
						<option selected>{{ $type }}</option>
						@else
						<option>{{ $type }}</option>
						@endif
						@endforeach
					</select>
				</div>

				<div class="form-group">
					{{ Form::label('limit', 'الشروط') }}
					<select id="limit" name="limit" class="form-control">
						@foreach($limits as $limit)
						{{ $limit }}
						@if( $radio->limit  == $limit )
						<option selected>{{ $limit }}</option>
						@else
						<option>{{ $limit }}</option>
						@endif
						@endforeach
					</select>
				</div>

				<div class="form-group">
					{{ Form::label('limits_num', 'عدد مرات التكرار') }}
					{{ Form::number('limits_num', $radio->limits_num, array('class' => 'form-control'))}}
				</div>

				<div style="height: 50px;"></div>
				{{ Form::submit('تعديل', array('class' => 'btn btn-info form-control')) }}
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
