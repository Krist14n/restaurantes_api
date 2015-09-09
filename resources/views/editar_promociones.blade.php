@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Editar: {{ $promocion->promocion }}</h4>

	{!! Form::model($promocion, ['route' => ['promociones.update', $promocion->id ] , 'method' => 'PATCH']) !!}

		<div class="form-group">

			{!! Form::text('promocion', null, ['class'=> 'form-control', 'required' => 'required']) !!}

		</div>

		<div class="form-group">

			{!! Form::submit('Editar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}
</div>
@endsection