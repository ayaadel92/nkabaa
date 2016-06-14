@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				إضافة معمل
			</header>
			<!-- 'name', 'address', 'phone', 'governorate', 'area' , 'type' , 'discription', 'path' -->

			<div class="panel-body">
				<!-- 'files' => true to accept uploading photos -->
				{{ Form::open(array('route' => 'admin-lab.store', 'files' => true)) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('login_id', 'رمز الدخول') }}
							{{ Form::text('login_id', null, array('class' => 'form-control')) }}
						</div>
					</li>
					<li>
						<div class="form-group">
							{{ Form::label('name', 'الاسم') }}
							{{ Form::text('name', null, array('required','class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('address', 'العنوان') }}
							{{ Form::text('address', null, array('required','class' => 'form-control')) }}
						</div>
					</li> 

					<li>
						<div class="form-group">
							{{ Form::label('phone', 'التليفون') }}
							{{ Form::text('phone', null, array('required','class' => 'form-control')) }}
						</div>
					</li>       

					<li>
						<div class="form-group">
							{{ Form::label('governorate', 'المحافظة') }}
							{{ Form::text('governorate', null, array('required','class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('area', 'المنطقة') }}
							{{ Form::text('area', null, array('required','class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('type', 'النوع') }}
							{{ Form::select('type',['مركز اشعة' => 'مركز اشعة','معمل تحاليل' => 'معمل تحاليل'],'أختر نوع المعمل',array('required','required','class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('discription', 'تفاصيل عن المعمل') }}
							{{ Form::textarea('discription' ,null, array('required','class' => 'form-control')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('path', 'اختر صورة') }}
							{{ Form::file('path', array('required','class' => 'btn btn-warning form-control')) }}
						</div>
					</li>

					<li>
						{{ Form::submit('أضافة', array('required','class' => 'btn btn-info form-control')) }}
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