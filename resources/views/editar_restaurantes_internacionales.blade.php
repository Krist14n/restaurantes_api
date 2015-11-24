@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Editar Restaurante Internacional</h4>

	{!! Form::model('restaurante_internacional', ['route' => ['restaurantes_internacionales.update', $restaurante_internacional->id], 'method' => 'PATCH', 'files' => 'true']) !!}

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
			{!! Form::text('nombre', $restaurante_internacional->nombre, ['class'=> 'form-control', 'id' => 'nombre', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="tipo-comida">Tipo de Comida</label>
			{!! Form::text('tipo_comida', $restaurante_internacional->tipo_comida, ['class'=> 'form-control', 'id' => 'tipo-comida', 'required' => 'required']) !!}

		</div>

		<div class="form-group">
			<label for="descripcion">Descripción</label>
			{!! Form::textarea('descripcion', $restaurante_internacional->descripcion, ['class'=> 'form-control', 'id' => 'descripcion']) !!}

		</div>

		<div class="form-group">
			<label for="calificacion_comida ">Calificación Comida (Especificar en caso de no tener calificación) </label>
			{!! Form::text('calificacion_comida', $restaurante_internacional->calificacion_comida, ['class'=> 'form-control', 'id' => 'calificacion_comida']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_ambiente">Calificación Ambiente</label>
			{!! Form::text('calificacion_ambiente', $restaurante_internacional->calificacion_ambiente, ['class'=> 'form-control', 'id' => 'calificacion_ambiente']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_servicio">Calificación Servicio</label>
			{!! Form::text('calificacion_servicio', $restaurante_internacional->calificacion_servicio, ['class'=> 'form-control', 'id' => 'calificacion_servicio']) !!}
		</div>

		<div class="form-group">
			<label for="ideal_para">Ideal Para (separados por punto y coma ";")</label>
			{!! Form::textarea('ideal_para', $restaurante_internacional->ideal_para, ['class'=> 'form-control', 'id' => 'ideal_para']) !!}
		</div>

		<div class="form-group">
			<label for="recomendacion_mb">Recomendación MB(separados por punto y coma ";")</label>
			{!! Form::textarea('recomendacion_mb', $restaurante_internacional->recomendacion_mb, ['class'=> 'form-control', 'id' => 'recomendacion_mb']) !!}

		</div>
		<div class="form-group">
			<label for="direccion">Dirección</label>
			{!! Form::textarea('direccion', $direccion_internacional->direccion, ['class'=> 'form-control', 'id' => 'direccion', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="latitud">Latitud</label>
			{!! Form::text('latitud', $direccion_internacional->latitud, ['class'=> 'form-control', 'id' => 'latitud', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="longitud">Longitud</label>
			{!! Form::text('longitud', $direccion_internacional->longitud, ['class'=> 'form-control', 'id' => 'longitud', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="telefono">Teléfono(s) *separados por coma</label>
			{!! Form::textarea('telefono', $direccion_internacional->telefono, ['class'=> 'form-control', 'id' => 'telefono']) !!}

		</div>
		<div class="form-group">
			<label for="web">Pagina Web</label>
			{!! Form::text('web', $restaurante_internacional->web, ['class'=> 'form-control', 'id' => 'web']) !!}

		</div>
		<div class="form-group">
			<label for="foto">Foto <b>{{ $restaurante_internacional->foto }}</b></label>
			{!! Form::file('foto', null, ['class'=> 'form-control', 'id' => 'foto']) !!}

		</div>
		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#ciudad").val("{{ $restaurante_internacional->ciudad_id}}");
})
</script>
@endsection