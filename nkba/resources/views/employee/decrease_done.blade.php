@extends('employee.layout.master-employee')
@section('content')

<div class = "well well-lg">
	<pre>
		قام المريض {{ $transfer->patient_name }} بعمل {{ $transfer->type }} من نوع {{ $transfer->type_name }} في {{ $transfer->updated_at }} بمبلغ {{ $transfer->total_cost }} ونسبة مساهمة النقابة {{ $transfer->percentage }}

		يمكنك الأن الخصم من الرصيد الحالي مبلغ {{ ($transfer->percentage/100) * $transfer->total_cost }}
	</pre>
</div>
{{ link_to_route('employee-transfer.decreaseInsure', 'خصم', array($limit_id, $analysis_credit, $total_remainder, $transfer->total_cost), array('class' => 'btn btn-danger')) }}
<div style="width: 50px;"></div>
{{ link_to_route('employee-transfer.confirmed', 'رجوع',null, array('class' => 'btn btn-danger')) }}

@endsection

