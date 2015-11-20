@extends('app')

@section('content')
<div class="col-md-4">
	<h4>Agregar Ciudad</h4>

	{!! Form::open(['route' => 'ciudades.store']) !!}

		<div class="form-group">
			<select class="form-control" name="region_id">
				  	@foreach( $regiones as $region)
				  	<option value="{{ $region->id }}">{{ $region->region }}</option>
				  	@endforeach
			</select>
		</div>

		<div class="form-group">

			{!! Form::text('nombre', null, ['class'=> 'form-control','required' => 'required']) !!}

		</div>

		<div class="form-group">

			{!! Form::submit('Agregar', ['class' => 'btn btn-primary  ']) !!}

		</div>
	
	{!! Form::close() !!}

	@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
    @endif
</div>
@endsection