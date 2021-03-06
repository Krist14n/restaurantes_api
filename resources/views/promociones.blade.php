@extends('app')
@section('content')
<a href="/promociones/create">
	<button type="button" class="btn btn-primary" aria-label="Left Align">
		<span class="glyphicon glyphicon-plus" aria-hidden="true">Agregar</span>
	</button>
</a>
<div class="table-responsive">
	<table class="table table-striped" id="table_id">
		<thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Acción</th>
        </tr>
      </thead>

      <tbody>
		@foreach($promociones as $promocion)
        <tr>
	        <th scope="row">{{ $promocion->id }}</th>
	    	<td>{{ $promocion->promocion }}</td>
	        <td>
	        <span style="display:inline">
	          	<a href="/promociones/{{ $promocion->id }}/edit">
	          		<button type="button" class="btn btn-default">
	  					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</button>
				</a>

				{!! Form::open(array('route' => array('promociones.destroy', $promocion->id), 'method' => 'delete' )) !!}
				<button type="submit" class="btn btn-danger">
	  				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</span>	
				{!! Form::close() !!}
			</td>
        </tr>
		@endforeach	
      </tbody>
	</table>
</div>
@endsection