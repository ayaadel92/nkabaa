@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				عرض كل المستخدمين
			</header>
			<div class="panel-body">
				@if ($users->count())
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th class="text-center">id</th>
							<th class="text-center">رمز الدخول</th>
							<th class="text-center">الإيميل</th>
							<th class="text-center">الدور</th>
							<th colspan="4" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td class="text-center">{{ $user['id']}}</td>
							<td class="text-center">{{ $user['login'] }}</td>
							<td class="text-center">{{ $user['email'] }}</td>
							<td class="text-center">{{ $user['role'] }}</td>
							<td class="text-center">
								{{ link_to_route('admin-user.show', 'عرض', array($user->id), array('class' => 'btn btn-info')) }}</td>
							<td class="text-center">
								{{ link_to_route('admin-user.edit', 'تعديل', array($user->id), array('class' => 'btn btn-success')) }}
							</td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-user.destroy', $user->id))) }}
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