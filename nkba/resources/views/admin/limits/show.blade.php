@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات رصيد المهندس
			</header>
			<div class="panel-body">
				<ul>

					<li>
						الرصيد الإجمالي: {{ $limit->total_remainder }}
					</li>

					<li>
						رصيد العمليات: {{ $limit->surgery_credit }}
					</li>

					<li>
						رصيد الاشعة والتحاليل: {{ $limit->analysis_credit }}
					</li>       

					<li>
						رقم العصو: {{ $limit->user_id }}
					</li>

					<div style="height: 30px;"></div>
				</ul>
				<table>
					<tr>
						<td>
							{{ link_to_route('admin-limit.edit', 'تعديل', array($limit->id), array('class' => 'btn btn-success')) }}
						</td>
						<td style="width: 30px;"></td>
						<td>
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-limit.destroy', $limit->id))) }}
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
