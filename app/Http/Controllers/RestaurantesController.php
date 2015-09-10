<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Zona;
use App\Plan;
use App\Cocina;
use App\Promocion;
use App\Direccion;
use Illuminate\Http\Request;

class RestaurantesController extends Controller {
	/**
	* Create a new controller instance
	*
	* @return void
	*/
	public function __construct(Zona $zona, Plan $plan, Cocina $cocina, Restaurante $restaurante, Direccion $direccion)
	{
		$this->middleware('auth');
		$this->zona 		= 	$zona;
		$this->plan 		= 	$plan;
		$this->cocina 		= 	$cocina;
		$this->restaurante 	= 	$restaurante;
		$this->direccion 	= 	$direccion;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Restaurante $restaurante)
	{
		//
		$restaurantes = $restaurante->get();
		

		return view('restaurantes', compact('restaurantes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Zona $zona, Plan $plan, Cocina $cocina, Promocion $promocion)
	{
		//

		$zonas = $zona->get();

		$planes = $plan->get();

		$cocinas = $cocina->get();

		$promociones = $promocion->get();

		return view('crear_restaurantes', compact('zonas', 'planes', 'cocinas', 'promociones'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
