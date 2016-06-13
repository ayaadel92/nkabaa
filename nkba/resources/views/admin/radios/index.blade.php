@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				عرض كل الأشعة والتحاليل
			</header>
			<div class="panel-body">
				@if ($radios->count())
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th class="text-center">id</th>
							<th class="text-center">الاسم</th>
							<th class="text-center">النوع</th>
							<th class="text-center">الشروط</th>
							<th class="text-center">عدد المرات</th>
							<th colspan="4" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($radios as $radio)
						<tr>
							<td class="text-center">{{ $radio['id']}}</td>
							<td class="text-center">{{ $radio['name'] }}</td>
							<td class="text-center">{{ $radio['type'] }}</td>
							<td class="text-center">{{ $radio['limit'] }}</td>
							<td class="text-center">{{ $radio['limits_num'] }}</td>
							<td class="text-center">
								{{ link_to_route('admin-radio.show', 'عرض', array($radio->id), array('class' => 'btn btn-info')) }}</td>
							<td class="text-center">
								{{ link_to_route('admin-radio.edit', 'تعديل', array($radio->id), array('class' => 'btn btn-success')) }}
							</td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-radio.destroy', $radio->id))) }}
								{{ Form::submit('حذف', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
				@else
				لا يوجد تحليل او اشعة
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