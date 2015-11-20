@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Agregar Restaurante</h4>

	{!! Form::open(['route' => 'restaurantes_internacionales.store', 'files' => 'true']) !!}

		<div class="form-group">
			<label for="ciudad">Ciudad</label>
			<select class="form-control" name="ciudad_id" id="ciudad">
				  	@foreach( $ciudades as $ciudad)
				  	<option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
				  	@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="nombre">Nombre</label>
			{!! Form::text('nombre', null, ['class'=> 'form-control', 'id' => 'nombre', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="tipo-comida">Tipo de Comida</label>
			{!! Form::text('tipo_comida', null, ['class'=> 'form-control', 'id' => 'tipo-comida', 'required' => 'required']) !!}

		</div>

		<div class="form-group">
			<label for="descripcion">Descripción</label>
			{!! Form::textarea('descripcion', null, ['class'=> 'form-control', 'id' => 'descripcion']) !!}

		</div>

		<div class="form-group">
			<label for="calificacion_comida ">Calificación Comida (Especificar en caso de no tener calificación) </label>
			{!! Form::text('calificacion_comida', null, ['class'=> 'form-control', 'id' => 'calificacion_comida']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_ambiente">Calificación Ambiente</label>
			{!! Form::text('calificacion_ambiente', null, ['class'=> 'form-control', 'id' => 'calificacion_ambiente']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_servicio">Calificación Servicio</label>
			{!! Form::text('calificacion_servicio', null, ['class'=> 'form-control', 'id' => 'calificacion_servicio']) !!}
		</div>

		<div class="form-group">
			<label for="ideal_para">Ideal Para (separados por punto y coma ";")</label>
			{!! Form::textarea('ideal_para', null, ['class'=> 'form-control', 'id' => 'ideal_para']) !!}
		</div>

		<div class="form-group">
			<label for="recomendacion_mb">Recomendación MB(separados por punto y coma ";")</label>
			{!! Form::textarea('recomendacion_mb', null, ['class'=> 'form-control', 'id' => 'recomendacion_mb']) !!}

		</div>
		<div class="form-group">
			<label for="direccion">Dirección</label>
			{!! Form::textarea('direccion', null, ['class'=> 'form-control', 'id' => 'direccion', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="latitud">Latitud</label>
			{!! Form::text('latitud', null, ['class'=> 'form-control', 'id' => 'latitud', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="longitud">Longitud</label>
			{!! Form::text('longitud', null, ['class'=> 'form-control', 'id' => 'longitud', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="telefono">Teléfono(s) *separados por coma</label>
			{!! Form::textarea('telefono', null, ['class'=> 'form-control', 'id' => 'telefono']) !!}

		</div>
		<div class="form-group">
			<label for="web">Pagina Web</label>
			{!! Form::text('web', null, ['class'=> 'form-control', 'id' => 'web']) !!}

		</div>
		<div class="form-group">
			<label for="foto">Foto</label>
			{!! Form::file('foto', null, ['class'=> 'form-control', 'id' => 'foto']) !!}

		</div>
		<div class="form-group">
			{!! Form::submit('Agregar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}
</div>
@endsection