@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				عرض كل المستشفياتس
			</header>
			<div class="panel-body">
				@if ($hospitals->count())
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th class="text-center">id</th>
							<th class="text-center">الاسم</th>
							<th class="text-center">العنوان</th>
							<th class="text-center">التليفون</th>
							<th class="text-center">المحافظة</th>
							<th class="text-center">المنطقة</th>
							<th colspan="4" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($hospitals as $hospital)
						<tr>
							<td class="text-center">{{ $hospital['id']}}</td>
							<td class="text-center">{{ $hospital['name'] }}</td>
							<td class="text-center">{{ $hospital['address'] }}</td>
							<td class="text-center">{{ $hospital['phone'] }}</td>
							<td class="text-center">{{ $hospital['governorate'] }}</td>
							<td class="text-center">{{ $hospital['area'] }}</td>
							<td class="text-center">
								{{ link_to_route('admin-hospital.show', 'عرض', array($hospital->id), array('class' => 'btn btn-info')) }}</td>
							<td class="text-center">
								{{ link_to_route('admin-hospital.edit', 'تعديل', array($hospital->id), array('class' => 'btn btn-success')) }}
							</td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-hospital.destroy', $hospital->id))) }}
								{{ Form::submit('حذف', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
				@else
				لا يوجد مستشفيات
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