@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Agregar Restaurante</h4>

	{!! Form::open(['route' => 'restaurantes.store', 'files' => 'true']) !!}

		<div class="form-group">
			<label for="zona_id">Zona</label>
			<select class="form-control" name="zona_id" id="zona">
				  	@foreach( $zonas as $zona)
				  	<option value="{{ $zona->id }}">{{ $zona->zona }}</option>
				  	@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="plan_id">Plan</label>
			<select class="form-control" name="plan_id" id="plan">
				  	@foreach( $planes as $plan)
				  	<option value="{{ $plan->id }}">{{ $plan->plan }}</option>
				  	@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="cocina_id">Tipo de Cocina</label>
			<select class="form-control" name="cocina_id" id="cocina">
				  	@foreach( $cocinas as $cocina)
				  	<option value="{{ $cocina->id }}">{{ $cocina->cocina }}</option>
				  	@endforeach
			</select>
		</div>


		<div class="form-group">
			<label for="nombre">Nombre</label>
			{!! Form::text('nombre', null, ['class'=> 'form-control', 'id' => 'nombre', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="descripcion">Descripción</label>
			{!! Form::textarea('descripcion', null, ['class'=> 'form-control', 'id' => 'descripcion', 'required' => 'required']) !!}

		</div>

		<div class="form-group">
			<label for="nespresso">Nespresso</label>
			{!!Form::checkbox('nespresso', null, ['class'=> 'form-control', 'id' => 'nespresso', 'required' => 'required', 'checked' => 'false'])!!}

		</div>

		<div class="form-group">
			<label for="calificacion_comida ">Calificación Comida (Especificar en caso de no tener calificación) </label>
			{!! Form::text('calificacion_comida', null, ['class'=> 'form-control', 'id' => 'calificacion_comida', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_ambiente">Calificación Ambiente</label>
			{!! Form::text('calificacion_ambiente', null, ['class'=> 'form-control', 'id' => 'calificacion_ambiente', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_servicio">Calificación Servicio</label>
			{!! Form::text('calificacion_servicio', null, ['class'=> 'form-control', 'id' => 'calificacion_servicio', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="ideal_para">Ideal Para (separados por punto y coma ";")</label>
			{!! Form::textarea('ideal_para', null, ['class'=> 'form-control', 'id' => 'ideal_para', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="marco_recomienda">Recomendación MB (separados por punto y coma ";")</label>
			{!! Form::textarea('marco_recomienda', null, ['class'=> 'form-control', 'id' => 'marco_recomienda', 'required' => 'required']) !!}
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
			<label for="precio">Precio promedio por persona</label>
			{!! Form::text('precio', null, ['class'=> 'form-control', 'id' => 'precio']) !!}

		</div>
		<div class="form-group">
			<label for="promocion">Promoción</label>
			{!! Form::textarea('promocion', null, ['class'=> 'form-control', 'id' => 'promocion']) !!}

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