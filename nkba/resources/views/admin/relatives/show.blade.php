@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات المهندس
			</header>
			<div class="panel-body">
				<img src= "{{ $relative->path }}" width="100px" height="100px">
				<ul>
					<li>
						الاسم: {{ $relative->name }}
					</li>

					<li>
						الاشتراك: {{ $relative->status }}
					</li>

					<li>
						رقم التأمين: {{ $relative->health_id }}
					</li>       

					<li>
						عضوية المهندس: {{ $relative->eng_id }}
					</li>

					<li>
						تاريخ الميلاد: {{ $relative->birth_date }}
					</li>

					<li>
						النوع: {{ $relative->gender }}
					</li>
					
					<li>
						درجة القرابة: {{ $relative->relation_type }}
					</li>
					
					<li>
						الرقم القومي: {{ $relative->national_id }}
					</li>

					<li>
						رقم الرصيد: {{ $relative->limit_id }}
					</li>
					<div style="height: 30px;"></div>
				</ul>
				<table>
					<tr>
						<td>
							{{ link_to_route('admin-relative.edit', 'تعديل', array($relative->id), array('class' => 'btn btn-success')) }}
						</td>
						<td style="width: 30px;"></td>
						<td>
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-relative.destroy', $relative->id))) }}
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
