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
				<ul>

					<li>
						الاسم: {{ $engineer->name }}
					</li>

					<li>
						الإيميل: {{ $engineer->email }}
					</li>

					<li>
						الجنس: {{ $engineer->gender }}
					</li>       

					<li>
						العنوان: {{ $engineer->address }}
					</li>

					<li>
						الموبايل: {{ $engineer->phone_number }}
					</li>

					<li>
						تاريخ الميﻻد: {{ $engineer->birth_date }}
					</li>
					
					<li>
						سنة التخرج: {{ $engineer->gradu_year }}
					</li>
					
					<li>
						عدد الأقارب: {{ $engineer->relative_num }}
					</li>

					<li>
						الرقم القومي: {{ $engineer->national_id }}
					</li>

					<li>
						رقم العضوية: {{ $engineer->eng_id }}
					</li>

					<li>
						رقم التأمين: {{ $engineer->health_id }}
					</li>

					<li>
						رقم حساب مصرفي: {{ $engineer->credit_number }}
					</li>
					<div style="height: 30px;"></div>
				</ul>
				<table>
					<tr>
						<td>
							{{ link_to_route('admin-engineer.edit', 'تعديل', array($engineer->id), array('class' => 'btn btn-success')) }}
						</td>
						<td style="width: 30px;"></td>
						<td>
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-engineer.destroy', $engineer->id))) }}
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
