@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات الطبيب
			</header>

			<div class="panel-body">
				<img src= "{{ $doctor->path }}" width="100px" height="100px">
				<table class="table table-bordered">
					<tr>
						<th class="text-center">الاسم</th>
						<td class="text-center">{{ $doctor->name }}</td> 
					</tr>

					<tr>
						<th class="text-center">الدرجة</th>
						<td class="text-center">{{ $doctor->degree }}</td> 
					</tr>

					<tr>
						<th class="text-center">التخصص</th>
						<td class="text-center">{{ $doctor->specialization }}</td> 
					</tr>       
					
					<tr>
						<th class="text-center">التليفون</th>
						<td class="text-center">{{ $doctor->phone }}</td> 
					</tr>

					<tr>
						<th class="text-center">الموبايل</th>
						<td class="text-center">{{ $doctor->mobile }}</td> 
					</tr>

					<tr>
						<th class="text-center">العنوان</th>
						<td class="text-center">{{ $doctor->address }}</td> 
					</tr>

					<tr>
						<th class="text-center">المحافظة</th>
						<td class="text-center">{{ $doctor->governorate }}</td> 
					</tr>
					
					<tr>
						<th class="text-center">المنطقة</th>
						<td class="text-center">{{ $doctor->area }}</td> 
					</tr>

					<tr>
						<th class="text-center">تفاصيل عن الطبيب</th>
						<td class="text-center">{{ $doctor->discription }}</td> 
					</tr>

					<tr>
						<th class="text-center">السعر</th>
						<td class="text-center">{{ $doctor->price }}</td> 
					</tr>
					<div style="height: 30px;"></div>
				</table>
				<table>
					<tr>
						<td class="text-center">
							{{ link_to_route('admin-doctor.edit', 'تعديل', array($doctor->id), array('class' => 'btn btn-success')) }}
						</td>
						<td style="width: 30px;"></td>
						<td  class="text-center">
							{{ link_to_route('admin-doctor.index', 'عرض الكل', array($doctor->id), array('class' => 'btn btn-info')) }}
						</td>
						<td style="width: 30px;"></td>
						<td class="text-center">
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-doctor.destroy', $doctor->id))) }}
							{{ Form::submit('حذف', array('class' => 'btn btn-danger')) }}
							{{ Form::close() }}
						</td>
					</tr>
				</table>
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
