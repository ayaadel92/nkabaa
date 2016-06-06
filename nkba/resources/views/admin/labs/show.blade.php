@extends('admin.layout.master')
@section('content')

<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				بيانات المعمل
			</header>
			<div class="panel-body">
				<img src= "{{ $lab->path }}">
				<table class="table table-bordered">
					<tr><!-- 'name', 'address', 'phone', 'governorate', 'area', 'discription', 'path' -->
						<th class="text-center">الاسم</th>
						<td class="text-center">{{ $lab->name }}</td> 
					</tr>

					<tr>
						<th class="text-center">العنوان</th>
						<td class="text-center">{{ $lab->address }}</td> 
					</tr>

					<tr>
						<th class="text-center">التليفون</th>
						<td class="text-center">{{ $lab->phone }}</td> 
					</tr>

					<tr>
						<th class="text-center">المحافظة</th>
						<td class="text-center">{{ $lab->governorate }}</td> 
					</tr>
					
					<tr>
						<th class="text-center">المنطقة</th>
						<td class="text-center">{{ $lab->area }}</td> 
					</tr>

					<tr>
						<th class="text-center">النوع</th>
						<td class="text-center">{{ $lab->area }}</td> 
					</tr>

					<tr>
						<th class="text-center">تفاصيل عن المستشفى</th>
						<td class="text-center">{{ $lab->discription }}</td> 
					</tr>
					<div style="height: 30px;"></div>
				</table>
				<table>
					<tr>
						<td class="text-center">
							{{ link_to_route('admin-lab.edit', 'تعديل', array($lab->id), array('class' => 'btn btn-success')) }}
						</td>
						<td style="width: 30px;"></td>
						<td  class="text-center">
							{{ link_to_route('admin-lab.index', 'عرض الكل', array($lab->id), array('class' => 'btn btn-info')) }}
						</td>
						<td style="width: 30px;"></td>
						<td class="text-center">
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin-lab.destroy', $lab->id))) }}
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
