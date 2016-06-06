@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				عرض كل الأطباء
			</header>
			<div class="panel-body">
				@if ($doctors->count())
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th class="text-center">id</th>
							<th class="text-center">الاسم</th>
							<th class="text-center">الدرجة</th>
							<th class="text-center">التخصص</th>
							<th class="text-center">العنوان</th>
							<th class="text-center">التليفون</th>
							<th class="text-center">الموبايل</th>
							<th class="text-center">السعر</th>
							<th colspan="4" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($doctors as $doctor)
						<tr>
							<td class="text-center">{{ $doctor['id']}}</td>
							<td class="text-center">{{ $doctor['name'] }}</td>
							<td class="text-center">{{ $doctor['degree'] }}</td>
							<td class="text-center">{{ $doctor['specialization'] }}</td>
							<td class="text-center">{{ $doctor['address'] }}</td>
							<td class="text-center">{{ $doctor['phone'] }}</td>
							<td class="text-center">{{ $doctor['mobile'] }}</td>
							<td class="text-center">{{ $doctor['price'] }}</td>
							<td class="text-center">
								{{ link_to_route('admin-doctor.show', 'عرض', array($doctor->id), array('class' => 'btn btn-info')) }}</td>
							<td class="text-center">
								{{ link_to_route('admin-doctor.edit', 'تعديل', array($doctor->id), array('class' => 'btn btn-success')) }}
							</td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-doctor.destroy', $doctor->id))) }}
								{{ Form::submit('حذف', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
				@else
				لا يوجد اطباء
				@endif
			</div>
		</section>
	</div>
</div>

@endsection
<style>
	table form { margin-bottom: 0; }
	form ul { margin-left: 0; list-style: none; }
	.error { color: red; font-style: italic; }
	body { padding-top: 20px; }
</style>