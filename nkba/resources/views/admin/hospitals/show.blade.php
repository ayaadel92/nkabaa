@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات المستشفى
			</header>

			<div class="panel-body">
				<img src= "{{ $hospital->path }}" width="100px" height="100px">
				<table class="table table-bordered">
					<tr>
						<th class="text-center">رمز الدخول</th>
						<td class="text-center">{{ $hospital->login_id }}</td> 
					</tr>

					<tr>
						<th class="text-center">الاسم</th>
						<td class="text-center">{{ $hospital->name }}</td> 
					</tr>

					<tr>
						<th class="text-center">العنوان</th>
						<td class="text-center">{{ $hospital->address }}</td> 
					</tr>

					<tr>
						<th class="text-center">التليفون</th>
						<td class="text-center">{{ $hospital->phone }}</td> 
					</tr>

					<tr>
						<th class="text-center">المحافظة</th>
						<td class="text-center">{{ $hospital->governorate }}</td> 
					</tr>
					
					<tr>
						<th class="text-center">المنطقة</th>
						<td class="text-center">{{ $hospital->area }}</td> 
					</tr>

					<tr>
						<th class="text-center">تفاصيل عن المستشفى</th>
						<td class="text-center">{{ $hospital->discription }}</td> 
					</tr>
					<div style="height: 30px;"></div>
				</table>
				<table>
					<tr>
						<td class="text-center">
							{{ link_to_route('admin-hospital.edit', 'تعديل', array($hospital->id), array('class' => 'btn btn-success')) }}
						</td>
						<td style="width: 30px;"></td>
						<td  class="text-center">
							{{ link_to_route('admin-hospital.index', 'عرض الكل', array($hospital->id), array('class' => 'btn btn-info')) }}
						</td>
						<td style="width: 30px;"></td>
						<td class="text-center">
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-hospital.destroy', $hospital->id))) }}
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
