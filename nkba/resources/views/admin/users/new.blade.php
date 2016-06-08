@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				إضافة مستخدم
			</header>
			<div class="panel-body">
				<!-- `id`, `login`, `email`, `role`, `password` -->
				<!-- 'files' => true to accept uploading photos -->
				{{ Form::open(array('route' => 'admin-user.store', 'files' => true)) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('login', 'رمز الدخول') }}
							{{ Form::text('login', null, array('required','class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('email', 'الإيميل') }}
							{{ Form::email('email', null, array('required','class' => 'form-control col-sm-6'))}}
						</div>
					</li>

					<li>
						<div class="form-group">      
							{{Form::label('role','الدور',array('class' => 'style' ))}}
							{{ Form::select('role',['ادمن'=>'أدمن','مهندس'=>'مهندس/مهندسة','قريب'=>'قريب','موظف'=>'موظف','طبيب'=>'طبيب','معمل'=>'معمل','مستشفي'=>'مستشفي'],'أختر نوع المستخدم',array('required','class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('password', 'الباسوورد') }}
							{{ Form::password('password', array('required','class' => 'form-control col-sm-7')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('password', 'تأكيد الباسوورد') }}
							{{ Form::password('password_confirmation', array('required','class' => 'form-control col-sm-7')) }}
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