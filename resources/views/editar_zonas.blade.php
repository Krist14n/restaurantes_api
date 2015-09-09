@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Editar: {{ $zona->zona }}</h4>

	{!! Form::model($zona, ['route' => ['zonas.update', $zona->id ] , 'method' => 'PATCH']) !!}

		<div class="form-group">

			{!! Form::text('zona', null, ['class'=> 'form-control', 'required' => 'required']) !!}

		</div>

		<div class="form-group">

			{!! Form::submit('Editar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}
</div>
@endsection