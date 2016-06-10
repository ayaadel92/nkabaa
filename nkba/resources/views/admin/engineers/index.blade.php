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
				@if ($engineers->count())
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th class="text-center">id</th>
							<th class="text-center">name</th>
							<th class="text-center">email</th>
							<th class="text-center">relatives number</th>
							<th class="text-center">card id</th>
							<th class="text-center">graduation year</th>
							<th colspan="4" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($engineers as $engineer)
						<tr>
							<td class="text-center">{{ $engineer['id']}}</td>
							<td class="text-center">{{ $engineer['name'] }}</td>
							<td class="text-center">{{ $engineer['email'] }}</td>
							<td class="text-center">{{ $engineer['relative_num'] }}</td>
							<td class="text-center">{{ $engineer['eng_id'] }}</td>
							<td class="text-center">{{ $engineer['gradu_year'] }}</td>
							<td class="text-center">
								{{ link_to_route('admin-engineer.show', 'عرض', array($engineer->id), array('class' => 'btn btn-info')) }}</td>
							<td class="text-center">
								{{ link_to_route('admin-engineer.edit', 'تعديل', array($engineer->id), array('class' => 'btn btn-success')) }}
							</td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-engineer.destroy', $engineer->id))) }}
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