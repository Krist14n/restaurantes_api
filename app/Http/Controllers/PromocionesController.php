<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Promocion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;

class PromocionesController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Promocion $promocion)
	{
		$this->middleware('auth');
		$this->promocion = $promocion;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$promociones = $this->promocion->get();

		return view('promociones', compact("promociones"));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return view('crear_promociones');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Promocion $promocion)
	{
		//
		$rules = array(
			'promocion'  => 'required|unique:promociones'
		);

		$validator = Validator::make($request->all(), $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::to('promociones/create')->withErrors($validator);

		}else{
			
			$this->promocion->create($request->all());

			return redirect('promociones');
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

		$promocion = $this->promocion->whereId($id)->first();

		return compact('promocion');
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

		$promocion = $this->promocion->whereId($id)->first();

		return view('editar_promociones', compact('promocion'));
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

		$promocion = $this->promocion->whereId($id)->first();

		$promocion->promocion = $request->get('promocion');

		$promocion->save();

		return redirect('promociones');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Promocion $promocion)
	{
		//

		$promociones = $this->promocion->whereId($id)->first();

		$promociones->delete();
		
		return redirect('promociones');
	}

}
