<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Response;
use App\Cocina;
use App\Restaurante;
use DB;

class ApiCocinasPromocionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Cocina $cocina)
	{
		//
		$cocinas = DB::table('cocinas')
					->join('restaurantes', 'cocinas.id', '=', 'restaurantes.cocina_id')
					->where('restaurantes.promocion', '!=', ' ')
					->whereNull('restaurantes.deleted_at')
					->get();

		return Response::json($cocinas);
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
	public function show($id, Restaurante $restaurante, Cocina $cocina)
	{
		//

		return Response::json($restaurante->where('cocina_id', '=', $id)->where('promocion', '!=', ' ')->get());

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
