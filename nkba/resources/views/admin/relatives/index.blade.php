@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				عرض كل الأقارب
			</header>
			<div class="panel-body">
				@if ($relatives->count())
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th class="text-center">id</th>
							<th class="text-center">الاسم</th>
							<th class="text-center">الاشتراك</th>
							<th class="text-center">رقم التأمين</th>
							<th class="text-center">عضوية المهندس</th>
							<th class="text-center">تاريخ الميﻻد</th>
							<th class="text-center">النوع</th>
							<th class="text-center">درجة القرابة</th>
							<th class="text-center">الرقم القومي</th>
							<th class="text-center">رقم الرصيد</th>
							<th colspan="4" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($relatives as $relative)
						<tr>
							<td class="text-center">{{ $relative['id']}}</td>
							<td class="text-center">{{ $relative['name'] }}</td>
							<td class="text-center">{{ $relative['status'] }}</td>
							<td class="text-center">{{ $relative['health_id'] }}</td>
							<td class="text-center">{{ $relative['eng_id'] }}</td>
							<td class="text-center">{{ $relative['birth_date'] }}</td>
							<td class="text-center">{{ $relative['gender'] }}</td>
							<td class="text-center">{{ $relative['relation_type'] }}</td>
							<td class="text-center">{{ $relative['national_id'] }}</td>
							<td class="text-center">{{ $relative['limit_id'] }}</td>
							<td class="text-center">{{ $relative['user_id'] }}</td>
							<td class="text-center">
								{{ link_to_route('admin-relative.show', 'عرض', array($relative->id), array('class' => 'btn btn-info')) }}</td>
							<td class="text-center">
								{{ link_to_route('admin-relative.edit', 'تعديل', array($relative->id), array('class' => 'btn btn-success')) }}
							</td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-relative.destroy', $relative->id))) }}
								{{ Form::submit('حذف', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
				@else
				لا يوجد الأقارب
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