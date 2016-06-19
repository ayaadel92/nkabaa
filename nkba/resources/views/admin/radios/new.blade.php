@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				إضافة اشعة او تحليل
			</header>
			<div class="panel-body">
				
				{{ Form::open(array('route' => 'admin-radio.store')) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('name', 'الاسم') }}
							{{ Form::text('name', null, array('class' => 'form-control')) }}
						</div>
					</li>
					<li>
						<div class="form-group">      
							{{Form::label('type','النوع',array('class' => 'style' ))}}
							{{ Form::select('type',['تحليل'=>'تحليل','اشعة'=>'اشعة'],null,array('required','class' => 'form-control')) }}
						</div>
					</li>
					<li>
						<div class="form-group">      
							{{Form::label('limit','الشروط',array('class' => 'style' ))}}
							{{ Form::select('limit',['yes'=>'نعم','no'=>'لا'],null,array('required','class' => 'form-control')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('limits_num', 'عدد مرات التكرار') }}
							{{ Form::number('limits_num', null, array('class' => 'form-control'))}}
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