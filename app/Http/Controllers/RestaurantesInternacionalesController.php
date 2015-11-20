<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Region;
use App\Ciudad;
use App\Direccion;
use App\Restaurante_Internacional;
use Illuminate\Http\Request;

class RestaurantesInternacionalesController extends Controller {

	/**
	* Create a new controller instance
	*
	* @return void
	*/
	public function __construct(Restaurante_Internacional $restaurante_internacional, Direccion $direccion)
	{
		$this->middleware('auth');
		$this->restaurante_internacional 	= 	$restaurante_internacional;
		$this->direccion 	= 	$direccion;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Restaurante_Internacional $restaurante_internacional)
	{
		//
		$restaurantes_internacionales = $restaurante_internacional->get();

		return view("restaurantes_internacionales", compact("restaurantes_internacionales"));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Ciudad $ciudad)
	{
		//
		$ciudades = $ciudad->get();

		return view("crear_restaurantes_internacionales", compact("ciudades"));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		//Validar estos Requests
		$nombre 				=	$request->nombre;
		$ciudad_id 				= 	$request->ciudad_id;
		$tipo_comida    		=   $request->tipo_comida;
		$descripcion 			= 	$request->descripcion;
		$calificacion_comida 	= 	$request->calificacion_comida;
		$calificacion_ambiente 	= 	$request->calificacion_ambiente;
		$calificacion_servicio 	= 	$request->calificacion_servicio;
		$ideal_para 			= 	$request->ideal_para;
		$recomendacion_mb  		=   $request->recomendacion_mb;
		$web 					= 	$request->web;

		$direccion 				=	$request->direccion;
		$latitud				= 	$request->latitud;
		$longitud				=	$request->longitud;
		$telefono 				=   $request->telefono;
		$token 					=   $request->_token;

		if ($request->file('foto')) {
			$imagen 		=	$request->file('foto');
			$ruta_imagen 	=	public_path().'/img/';
			$nombre_imagen  =   str_random(6).'_'.$imagen->getClientOriginalName();
			$uploadSuccess 	=   $imagen->move($ruta_imagen, $nombre_imagen);
		}

		//Una vez validados los requests
		$restaurante_internacional = Restaurante_Internacional::create(array(
			'nombre'				=>	$nombre,
			'ciudad_id'				=>	$ciudad_id,
			'tipo_comida' 			=>	$tipo_comida,
			'descripcion'			=>	$descripcion,
			'calificacion_comida'	=> 	$calificacion_comida,
			'calificacion_ambiente' => 	$calificacion_ambiente,
			'calificacion_servicio' => 	$calificacion_servicio,
			'ideal_para'			=>	$ideal_para,
			'recomendacion_mb'		=>	$recomendacion_mb,
			'web'					=>	$web,
			'foto'					=> 	$nombre_imagen,
			'_token'				=>	$token
		));

		$direccion = Direccion::create(array(
			'direccion'		=> 	$direccion,
			'latitud'		=>	$latitud,
			'longitud'		=>	$longitud,
			'telefono'		=> 	$telefono,
		));

		$restaurante_internacional->direccion()->save($direccion);


		if($restaurante_internacional->save())
		{
			return redirect('restaurantes_internacionales');
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

		$restaurante_internacional = $this->restaurantes_internacionales->whereId($id)->first();

		$direccion = $this->direccion->whereRestaurante_id($id)->first();

		$ciudades = $this->ciudad->get();
		
		return view('editar_restaurantes_internacionales', compact('restaurante_internacional','ciudades', 'direccion'));
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
		//Validar estos Requests
		$nombre 				=	$request->nombre;
		$ciudad_id 				= 	$request->ciudad_id;
		$tipo_comida    		=   $request->tipo_comida;
		$descripcion 			= 	$request->descripcion;
		$calificacion_comida 	= 	$request->calificacion_comida;
		$calificacion_ambiente 	= 	$request->calificacion_ambiente;
		$calificacion_servicio 	= 	$request->calificacion_servicio;
		$ideal_para 			= 	$request->ideal_para;
		$recomendacion_mb  		=   $request->recomendacion_mb;
		$web 					= 	$request->web;

		$direccion 				=	$request->direccion;
		$latitud				= 	$request->latitud;
		$longitud				=	$request->longitud;
		$telefono 				=   $request->telefono;
		$token 					=   $request->_token;

		if ($request->file('foto')) {
			$imagen 		=	$request->file('foto');
			$ruta_imagen 	=	public_path().'/img/';
			$nombre_imagen  =   str_random(6).'_'.$imagen->getClientOriginalName();
			$uploadSuccess 	=   $imagen->move($ruta_imagen, $nombre_imagen);
		}

		//Una vez validados los requests
		$restaurante_internacional = Restaurante_Internacional::where('id', '=', $id)->update(array(
			'nombre'				=>	$nombre,
			'ciudad_id'				=>	$ciudad_id,
			'tipo_comida' 			=>	$tipo_comida,
			'descripcion'			=>	$descripcion,
			'calificacion_comida'	=> 	$calificacion_comida,
			'calificacion_ambiente' => 	$calificacion_ambiente,
			'calificacion_servicio' => 	$calificacion_servicio,
			'ideal_para'			=>	$ideal_para,
			'recomendacion_mb'		=>	$recomendacion_mb,
			'web'					=>	$web,
			'foto'					=> 	$nombre_imagen,
			'_token'				=>	$token
		));

		$direccion = Direccion::where('restaurante_id', '=', $id)->update(array(
			'direccion'		=> 	$direccion,
			'latitud'		=>	$latitud,
			'longitud'		=>	$longitud,
			'telefono'		=> 	$telefono
		));


		return redirect('restaurantes_internacionales');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Restaurante_Internacional $restaurante_internacional)
	{
		//
		$restaurantes_internacionales = $this->restaurante_internacional->whereId($id)->first();
		$restaurantes_internacionales->delete();
		return redirect('restaurantes_internacionales');
	}

}
