<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cocina;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;


class CocinasController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Cocina $cocina)
	{
		$this->middleware('auth');
		$this->zona = $zona;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$cocinas = $this->cocina->get();

		return view('cocinas', compact("cocinas"));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('crear_cocinas');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Cocina $cocina)
	{
		//
		$rules = array(
			'cocina'  => 'required|unique:cocinas'
		);

		$validator = Validator::make($request->all(), $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::to('cocinas/create')->withErrors($validator);

		}else{
			
			$this->cocina->create($request->all());

			return redirect('cocinas');
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

		$cocina = $this->cocina->whereId($id)->first();

		return compact('cocina');
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
		$cocina = $this->cocina->whereId($id)->first();

		return view('editar_cocinas', compact('cocina'));
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
		$cocina = $this->cocina->whereId($id)->first();

		$cocina->cocina = $request->get('cocina');

		$cocina->save();

		return redirect('cocinas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Cocina $cocina)
	{
		//
		$cocinas = $this->cocina->whereId($id)->first();

		$cocinas->delete();
		
		return redirect('cocinas');
	}

}
