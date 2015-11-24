<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Response;
use App\Ciudad;
use App\Restaurante_Internacional;
use App\Direccion_Internacional;
use DB;


class ApiRestauranteCiudadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function show($id, Restaurante_Internacional $restaurante_internacional, Direccion_Internacional $direccion_internacional)
	{
		//
		$restaurant = DB::table('restaurantes_internacionales')
					->join('direcciones_internacionales', 'restaurantes_internacionales.id', '=', 'direcciones.restaurante_internacional_id')
					->where('restaurantes_internacionales.id', '=', $id)
					->whereNull('restaurantes_internacionales.deleted_at')
					->get();

		return Response::json($restaurant);
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
