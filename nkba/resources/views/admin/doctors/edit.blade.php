@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				تعديل الطبيب
			</header>
			<div class="panel-body">
			
				<!-- 'files' => true to accept uploading photos -->
				{{ Form::open(array('route' =>array( 'admin-doctor.update',$doctor->id), 'method' => 'put', 'files' => true)) }}
				<ul>
					<li>
						<div class="form-group">
							{{ Form::label('name', 'الاسم') }}
							{{ Form::text('name', $doctor->name, array('class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('degree', 'الدرجة') }}
							{{ Form::text('text', $doctor->degree, array('class' => 'form-control'))}}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('specialization', 'التخصص') }}
							{{ Form::text('specialization',$doctor->specialization, array('class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('address', 'العنوان') }}
							{{ Form::text('address',$doctor->address, array('class' => 'form-control')) }}
						</div>
					</li> 

					<li>
						<div class="form-group">
							{{ Form::label('phone', 'التليفون') }}
							{{ Form::text('phone', $doctor->phone, array('class' => 'form-control')) }}
						</div>
					</li>   

					<li>
						<div class="form-group">
							{{ Form::label('governorate', 'المحافظة') }}
							{{ Form::text('governorate', $doctor->governorate, array('class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('area', 'المنطقة') }}
							{{ Form::text('area', $doctor->area, array('class' => 'form-control')) }}
						</div>
					</li>

					<li>
						<div class="form-group">
							{{ Form::label('price', 'السعر') }}
							{{ Form::text('price' , $doctor->price, array('class' => 'form-control')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('mobile', 'الموبايل') }}
							{{ Form::text('mobile', $doctor->mobile, array('class' => 'form-control')) }}
						</div>
					</li>
					
					<li>
						<div class="form-group">
							{{ Form::label('discription', 'تفاصيل عن الطبيب') }}
							{{ Form::textarea('discription', $doctor->discription, array('class' => 'form-control')) }}
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
