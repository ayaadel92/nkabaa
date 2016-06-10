@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات المهندس
			</header>
			<div class="panel-body">
				<!-- 'files' => true to accept uploading photos -->
				<img src= "{{ $engineer->path }}">
				<div class="table-resposive">
					<table class="table table-bordered">

					<tr>
						<th class="text-center">الاسم</th>
						<td class="text-center">{{ $engineer->name }}</td>
					</tr>

					<tr>
						<th class="text-center">الإيميل</th>
						<td class="text-center">{{ $engineer->email }}</td>
					</tr>

					<tr>
					<th class="text-center">الجنس</th>
						<td class="text-center">{{ $engineer->gender }}</td>
					</tr>       

					<tr>
						<th class="text-center">العنوان</th>
						<td class="text-center">{{ $engineer->address }}</td>
					</tr>

					<tr>
						<th class="text-center">الموبايل</th>
						<td class="text-center">{{ $engineer->phone_number }}</td>
					</tr>

					<tr>
						<th class="text-center">تاريخ الميﻻد</th> 
						<td class="text-center">{{ $engineer->birth_date }}</td>
					</tr>
					
					<tr>
						<th class="text-center">سنة التخرج</th>
						<td class="text-center">{{ $engineer->gradu_year }}</td>
					</tr>
					
					<tr>
						<th class="text-center">عدد الأقارب</th>
						<td class="text-center">{{ $engineer->relative_num }}</td>
					</tr>

					<tr>
						<th class="text-center">الرقم القومي</th>
						<td class="text-center">{{ $engineer->national_id }}</td>
					</tr>

					<tr>
						<th class="text-center">رقم الtضوية</th>
						<td class="text-center">{{ $engineer->eng_id }}</td>
					</tr>

					<tr>
						<th class="text-center">رقم التأمين</td>
						<td class="text-center">{{ $engineer->health_id }}</td>
					</tr>

					<tr>
						<th class="text-center">رقم حساب مصرفي</th>
						<td class="text-center">{{ $engineer->credit_number }}</td>
					</tr>
					<div style="height: 30px;"></div>
				</table>
				<table>
					<tr>
						<td class="text-center">
							{{ link_to_route('admin-engineer.edit', 'تعديل', array($engineer->id), array('class' => 'btn btn-success')) }}
						</td>
						<td class="text-center" style="width: 30px;"></td>
						<td class="text-center">
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-engineer.destroy', $engineer->id))) }}
							{{ Form::submit('حذف', array('class' => 'btn btn-danger')) }}
							{{ Form::close() }}
						</td>
					</tr>
				</table>
				</div>
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
