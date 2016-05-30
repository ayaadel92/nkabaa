@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
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
					<li>
						{{ link_to_route('admin-engineer.edit', 'تعديل', array($engineer->id), array('class' => 'btn btn-success')) }}

						{{ link_to_route('admin-engineer.destroy', 'حذف', array($engineer->id), array('class' => 'btn btn-danger')) }}
					</li>
				</ul>
				{{ Form::close() }}

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
