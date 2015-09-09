@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Editar: {{ $cocina->cocina }}</h4>

	{!! Form::model($cocina, ['route' => ['cocinas.update', $cocina->id ] , 'method' => 'PATCH']) !!}

		<div class="form-group">

			{!! Form::text('cocina', null, ['class'=> 'form-control', 'required' => 'required']) !!}

		</div>

		<div class="form-group">

			{!! Form::submit('Editar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}
</div>
@endsection