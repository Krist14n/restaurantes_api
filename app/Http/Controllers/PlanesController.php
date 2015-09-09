<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;


class PlanesController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Plan $plan)
	{
		$this->middleware('auth');
		$this->plan = $plan;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$planes = $this->plan->get();

		return view('planes', compact('planes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return view('crear_planes');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Plan $plan)
	{
		//
		$rules = array(
			'plan'  => 'required|unique:planes'
		);

		$validator = Validator::make($request->all(), $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::to('planes/create')->withErrors($validator);

		}else{
			
			$this->plan->create($request->all());

			return redirect('planes');
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

		$plan = $this->plan->whereId($id)->first();

		return compact('plan');
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
		$plan = $this->plan->whereId($id)->first();

		return view('editar_planes', compact('plan'));
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

		$plan = $this->plan->whereId($id)->first();

		$plan->plan = $request->get('plan');

		$plan->save();

		return redirect('planes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Plan $plan)
	{
		//
		$planes = $this->plan->whereId($id)->first();

		$planes->delete();
		
		return redirect('planes');
	}

}
