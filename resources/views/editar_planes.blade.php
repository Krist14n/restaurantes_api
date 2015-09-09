@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Editar: {{ $plan->plan }}</h4>

	{!! Form::model($plan, ['route' => ['planes.update', $plan->id ] , 'method' => 'PATCH']) !!}

		<div class="form-group">

			{!! Form::text('plan', null, ['class'=> 'form-control', 'required' => 'required']) !!}

		</div>

		<div class="form-group">

			{!! Form::submit('Editar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}
</div>
@endsection