@extends('app')
@section('content')
<a href="/planes/create">
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
		@foreach($planes as $plan)
        <tr>
	        <th scope="row">{{ $plan->id }}</th>
	    	<td>{{ $plan->plan }}</td>
	        <td>
	        <span style="display:inline">
	          	<a href="/planes/{{ $plan->id }}/edit">
	          		<button type="button" class="btn btn-default">
	  					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</button>
				</a>

				{!! Form::open(array('route' => array('planes.destroy', $plan->id), 'method' => 'delete' )) !!}
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