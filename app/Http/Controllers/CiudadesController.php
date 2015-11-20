<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ciudad;
use App\Region;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Illuminate\Http\Request;

class CiudadesController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Ciudad $ciudad, Region $region)
	{
		$this->middleware('auth');
		$this->ciudad = $ciudad;
		$this->region = $region;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Ciudad $ciudad)
	{
		//

		$ciudades = $ciudad->get();
		return view('ciudades', compact("ciudades"));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$regiones = $this->region->get();
		return view('crear_ciudades', compact('regiones'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$rules = array(
			'nombre'  => 'required'
		);

		$validator = Validator::make($request->all(), $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::to('ciudades/create')->withErrors($validator);

		}else{
			
			$this->ciudad->create($request->all());
			return redirect('ciudades');
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$ciudad = $this->ciudad->whereId($id)->first();

		return compact('ciudad');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$ciudad = $this->ciudad->whereId($id)->first();

		return view('editar_ciudades', compact('ciudad'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//
		$ciudad = $this->ciudad->whereId($id)->first();

		$ciudad->nombre = $request->get('nombre');

		$ciudad->save();

		return redirect('ciudades');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Ciudad $ciudad)
	{
		//
		$ciudades = $this->ciudad->whereId($id)->first();
		$ciudades->delete();
		return redirect('ciudades');
	}

}
