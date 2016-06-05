@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				عرض كل المهندسين
			</header>
			<div class="panel-body">
				@if ($limits->count())
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th class="text-center">id</th>
							<th class="text-center">الرصيد الإجمالي</th>
							<th class="text-center">رصيد العمليات</th>
							<th class="text-center">رصيد الاشعة والتحاليل</th>
							<th class="text-center">user_id</th>
							<th colspan="4" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($limits as $limit)
						<tr>
							<td class="text-center">{{ $limit['id']}}</td>
							<td class="text-center">{{ $limit['total_remainder'] }}</td>
							<td class="text-center">{{ $limit['surgery_credit'] }}</td>
							<td class="text-center">{{ $limit['analysis_credit'] }}</td>
							<td class="text-center">{{ $limit['user_id'] }}</td>
							<td class="text-center">
								{{ link_to_route('admin-limit.show', 'عرض', array($limit->id), array('class' => 'btn btn-info')) }}
							</td>
							<td class="text-center">
								{{ link_to_route('admin-limit.edit', 'تعديل', array($limit->id), array('class' => 'btn btn-success')) }}
							</td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-limit.destroy', $limit->id))) }}
								{{ Form::submit('حذف', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@else
				لا يوجد مهندسين
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