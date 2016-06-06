@extends('admin.layout.master')
@section('content')

<!-- Form validations -->              
<div class="row">
	<div class="col-sm-10" style="float: left;">
		<section class="panel">
			<header class="panel-heading">
				تعديل المهندس
			</header>
			<div class="panel-body">
				
				{{ Form::open(array('route' =>array( 'admin-user.update',$user->id), 'method' => 'put')) }}					
				<div class="form-group">
					{{ Form::label('login', 'رمز الدخول') }}
					{{ Form::text('login', $user->login, array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('role', 'الدور') }}
					<select id="role" name="role" class="form-control">
						@foreach($roles as $role)
						{{ $role }}
						@if( $user->role  == $role )
						<option selected>{{ $role }}</option>
						@else
						<option>{{ $role }}</option>
						@endif
						@endforeach
					</select>
				</div>

				<div class="form-group">
					{{ Form::label('email', 'الإيميل') }}
					{{ Form::email('email', $user->email, array('class' => 'form-control'))}}
				</div>

				<div class="form-group">
					{{ Form::label('password', 'الباسوورد') }}
					{{ Form::password('password', array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('password', 'تأكيد الباسوورد') }}
					{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
				</div> 
				<div style="height: 50px;"></div>
				{{ Form::submit('أضافة', array('class' => 'btn btn-info form-control')) }}
				{{ Form::close() }}

				@if ($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error" style="color: red;">:message</li>')) }}
				</ul>
				@endif
				@if(Session::has('flash_message'))
				<div class="alert alert-success">
					{{ Session::get('flash_message') }}
				</div>
				@endif
			</div>
		</section>
	</div>
</div>

@endsection
