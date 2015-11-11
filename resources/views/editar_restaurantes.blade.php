@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Editar Restaurante</h4>

	{!! Form::model('restaurante', ['route' => ['restaurantes.update', $restaurante->id], 'method' => 'PATCH']) !!}

		<div class="form-group">
			<label for="zona">Zona</label>
			<select class="form-control zona_selector" name="zona_id" id="zona">
				  	@foreach( $zonas as $zona)
				  	<option value="{{ $zona->id }}">{{ $zona->zona }}</option>
				  	@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="plan">Plan</label>
			<select class="form-control plan_selector" name="plan_id" id="plan">
				  	@foreach( $planes as $plan)
				  	<option value="{{ $plan->id }}">{{ $plan->plan }}</option>
				  	@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="cocina">Tipo de Cocina</label>
			<select class="form-control cocina_selector" name="cocina_id" id="cocina">
				  	@foreach( $cocinas as $cocina)
				  	<option value="{{ $cocina->id }}">{{ $cocina->cocina }}</option>
				  	@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="nombre">Nombre</label>
			{!! Form::text('nombre', $restaurante->nombre, ['class'=> 'form-control', 'id' => 'nombre', 'required' => 'required']) !!}

		</div>
		<div class="form-group">
			<label for="descripcion">Descripción</label>
			{!! Form::textarea('descripcion', $restaurante->descripcion, ['class'=> 'form-control', 'id' => 'descripcion', 'required' => 'required']) !!}

		</div>

		<div class="form-group">
			<label for="nespresso">Nespresso</label>
			<label>No</label> {!!Form::radio('nespresso', '0', [ 'id' => 'nespresso_false' ])!!}
			<label>Si</label> {!!Form::radio('nespresso', '1', [ 'id' => 'nespresso_true' ])!!}
		</div>

		<div class="form-group">
			<label for="calificacion_comida ">Calificación Comida</label>
			{!! Form::text('calificacion_comida', $restaurante->calificacion_comida, ['class'=> 'form-control', 'id' => 'calificacion_comida', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_ambiente">Calificación Ambiente</label>
			{!! Form::text('calificacion_ambiente', $restaurante->calificacion_ambiente, ['class'=> 'form-control', 'id' => 'calificacion_ambiente', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="calificacion_servicio">Calificación Servicio</label>
			{!! Form::text('calificacion_servicio', $restaurante->calificacion_servicio, ['class'=> 'form-control', 'id' => 'calificacion_servicio', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="ideal_para">Ideal Para (separados por punto y coma ";")</label>
			{!! Form::textarea('ideal_para', $restaurante->ideal_para, ['class'=> 'form-control', 'id' => 'ideal_para', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="marco_recomienda">Recomendación MB (separados por punto y coma ";")</label>
			{!! Form::textarea('marco_recomienda', $restaurante->marco_recomienda, ['class'=> 'form-control', 'id' => 'marco_recomienda', 'required' => 'required']) !!}
		</div>

		<div class="form-group">
			<label for="direccion">Dirección</label>
			{!! Form::textarea('direccion', $direccion->direccion, ['class'=> 'form-control', 'id' => 'direccion', 'required' => 'required']) !!}

		</div>

		<div class="form-group">
			<label for="latitud">Latitud</label>
			{!! Form::text('latitud', $direccion->latitud, ['class'=> 'form-control', 'id' => 'latitud', 'required' => 'required']) !!}

		</div>

		<div class="form-group">
			<label for="longitud">Longitud</label>
			{!! Form::text('longitud', $direccion->longitud, ['class'=> 'form-control', 'id' => 'longitud', 'required' => 'required']) !!}

		</div>

		<div class="form-group">
			<label for="telefono">Teléfono(s) *separados por coma</label>
			{!! Form::textarea('telefono', $direccion->telefono, ['class'=> 'form-control', 'id' => 'telefono']) !!}

		</div>
		
		<div class="form-group">
			<label for="web">Pagina Web</label>
			{!! Form::text('web', $direccion->web, ['class'=> 'form-control', 'id' => 'web']) !!}

		</div>
		<div class="form-group">
			<label for="precio">Precio promedio por persona</label>
			{!! Form::text('precio', $restaurante->precio_promedio, ['class'=> 'form-control', 'id' => 'precio']) !!}

		</div>
		<div class="form-group">
			<label for="promocion">Promoción</label>
			{!! Form::textarea('promocion', $restaurante->promocion, ['class'=> 'form-control', 'id' => 'promocion']) !!}

		</div>

		<div class="form-group">
			<label for="foto">Foto<b>{{ $restaurante->foto }}</b></label>
			{!! Form::file('foto', null, ['class'=> 'form-control', 'id' => 'foto']) !!}

		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#zona").val("{{ $restaurante->zona_id}}");
	$("#plan").val("{{ $restaurante->plan_id}}");
	$("#cocina").val("{{ $restaurante->cocina_id}}");

	if({{$restaurante->nespresso}} == 1){
		$("#nespresso_true").attr('checked' , true);
		$("#nespresso_false").attr('checked' , false);
	}else{
		$("#nespresso_true").attr('checked' , false)
		$("#nespresso_false").attr('checked' , true);
	}
})
</script>
@endsection