@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات الاشعة او التحليل
			</header>
			<div class="panel-body">
				{{-- 'id', 'name', 'type', 'limit', 'limits_num' --}}
				<div class="table-resposive">
					<table class="table table-bordered">
						<tr>
							<th class="text-center">الاسم</th>
							<td class="text-center">{{ $radio->name }}</td>
						</tr>

						<tr>
							<th class="text-center">النوع</th>
							<td class="text-center">{{ $radio->type }}</td>
						</tr>

						<tr>
							<th class="text-center">الشروط</th>
							<td class="text-center">{{ $radio->limit }}</td>
						</tr>  
						<tr>
							<th class="text-center">عدد المرات</th>
							<td class="text-center">{{ $radio->limits_num }}</td>
						</tr>       
					</table>

					<div style="height: 30px;"></div>
					<table>
						<tr>
							<td  class="text-center">
								{{ link_to_route('admin-radio.edit', 'تعديل', array($radio->id), array('class' => 'btn btn-success')) }}
							</td>
							<td style="width: 30px;"></td>
							<td  class="text-center">
								{{ link_to_route('admin-radio.index', 'عرض الكل', array($radio->id), array('class' => 'btn btn-info')) }}
							</td>
							<td style="width: 30px;"></td>
							<td class="text-center">
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-radio.destroy', $radio->id))) }}
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
