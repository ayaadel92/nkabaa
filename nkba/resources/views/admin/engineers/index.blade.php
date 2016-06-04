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
				<table class="table" >
					<thead>
						<tr>
							<th style="float: right;">id</th>
							<th style="float: right;">name</th>
							<th style="float: right;">email</th>
							<th style="float: right;">relatives number</th>
							<th style="float: right;">card id</th>
							<th style="float: right;">graduation year</th>
							<th colspan="4" style="float: right;"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($engineers as $engineer)
						<tr>
							<td style="float: right;">{{ $engineer['id']}}</td>
							<td style="float: right;">{{ $engineer['name'] }}</td>
							<td style="float: right;">{{ $engineer['email'] }}</td>
							<td style="float: right;">{{ $engineer['relative_num'] }}</td>
							<td style="float: right;">{{ $engineer['eng_id'] }}</td>
							<td style="float: right;">{{ $engineer['gradu_year'] }}</td>
							<td style="float: right;">
								{{ link_to_route('admin-engineer.show', 'عرض', array($engineer->id), array('class' => 'btn btn-info')) }}
							</td>
							<td style="float: right;">
								{{ link_to_route('admin-engineer.edit', 'تعديل', array($engineer->id), array('class' => 'btn btn-success')) }}
							</td>
							<td style="float: right;">
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