@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات المستخدم
			</header>
			<div class="panel-body">
				<!-- 'files' => true to accept uploading photos -->
				<img src= "{{ $user->path }}">
				<table class="table table-bordered">
					<tr>
						<th class="text-center">رمز الدخول</th>
						<td class="text-center">{{ $user->login }}</td>
					</tr>

					<tr>
						<th class="text-center">الإيميل</th>
						<td class="text-center">{{ $user->email }}</td>
					</tr>

					<tr>
						<th class="text-center">الدور</th>
						<td class="text-center">{{ $user->role }}</td>
					</tr>       
				</table>
					<div style="height: 30px;"></div>
				<table>
					<tr>
						<td  class="text-center">
							{{ link_to_route('admin-user.edit', 'تعديل', array($user->id), array('class' => 'btn btn-success')) }}
						</td>
						<td style="width: 30px;"></td>
						<td  class="text-center">
							{{ link_to_route('admin-user.index', 'عرض الكل', array($user->id), array('class' => 'btn btn-info')) }}
						</td>
						<td style="width: 30px;"></td>
						<td class="text-center">
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-user.destroy', $user->id))) }}
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
