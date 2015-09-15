<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Zona;
use App\Plan;
use App\Cocina;
use App\Promocion;
use App\Direccion;
use App\Restaurante;
use Illuminate\Http\Request;

class RestaurantesController extends Controller {
	/**
	* Create a new controller instance
	*
	* @return void
	*/
	public function __construct(Restaurante $restaurante, Direccion $direccion, Zona $zonas, Plan $planes, Cocina $cocinas, Promocion $promociones)
	{
		$this->middleware('auth');
		$this->restaurante 	= 	$restaurante;
		$this->direccion 	= 	$direccion;
		$this->zona 		= 	$zonas;
		$this->plan 		=   $planes;
		$this->cocina 		= 	$cocinas;

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
	public function create(Zona $zona, Plan $plan, Cocina $cocina)
	{
		//

		$zonas = $zona->get();

		$planes = $plan->get();

		$cocinas = $cocina->get();

		return view('crear_restaurantes', compact('zonas', 'planes', 'cocinas'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//Validar estos Requests
		$zona_id 				= 	$request->zona_id;
		$plan_id				= 	$request->plan_id;
		$cocina_id				=	$request->cocina_id;
		$promocion 			   	=	$request->promocion;
		$nombre 				=	$request->nombre;
		$descripcion 			= 	$request->descripcion;
		$calificacion_comida 	= 	$request->calificacion_comida;
		$calificacion_ambiente 	= 	$request->calificacion_ambiente;
		$calificacion_servicio 	= 	$request->calificacion_servicio;
		$ideal_para 			= 	$request->ideal_para;
		$marco_recomienda  		=   $request->marco_recomienda;
		$direccion 				=	$request->direccion;
		$latitud				= 	$request->latitud;
		$longitud				=	$request->longitud;
		$telefono 				=   $request->telefono;
		$web 					= 	$request->web;
		$precio					= 	$request->precio;
		$token 					=   $request->_token;

		if ($request->file('foto')) {
			
			$imagen 		=	$request->file('foto');
			$ruta_imagen 	=	public_path().'/img/';
			$nombre_imagen  =   str_random(6).'_'.$imagen->getClientOriginalName();
			$uploadSuccess 	=   $imagen->move($ruta_imagen, $nombre_imagen);
		}

		//Una vez validados los requests
		$restaurante = Restaurante::create(array(
			'zona_id'				=>	$zona_id,
			'plan_id'				=> 	$plan_id,
			'cocina_id'				=>	$cocina_id,
			'promocion'				=> 	$promocion,
			'nombre' 				=>	$nombre,
			'descripcion'			=> 	$descripcion,
			'calificacion_comida'	=> 	$calificacion_comida,
			'calificacion_ambiente' => 	$calificacion_ambiente,
			'calificacion_servicio' => 	$calificacion_servicio,
			'ideal_para'			=> 	$ideal_para,
			'marco_recomienda'		=> 	$marco_recomienda,
			'precio_promedio'		=> 	$precio,
			'foto' 					=> 	$nombre_imagen,
			'_token'				=>	$token
		));

		$direccion = Direccion::create(array(
			'direccion'		=> 	$direccion,
			'latitud'		=>	$latitud,
			'longitud'		=>	$longitud,
			'telefono'		=> 	$telefono,
			'web'			=> 	$web
		));

		$restaurante->direccion()->save($direccion);


		if($restaurante->save())
		{
			return redirect('restaurantes');
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
	public function edit($id,Restaurante $restaurante, Direccion $direccion, Zona $zonas, Plan $planes, Cocina $cocinas)
	{
		//
		$restaurante = $this->restaurante->whereId($id)->first();

		$direccion = $this->direccion->whereRestaurante_id($id)->first();

		$zonas = $this->zona->get();

		$planes = $this->plan->get();

		$cocinas = $this->cocina->get();
		
		return view('editar_restaurantes', compact('restaurante','zonas','planes','cocinas', 'direccion'));
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
		$zona_id 				= 	$request->zona_id;
		$plan_id				= 	$request->plan_id;
		$cocina_id				=	$request->cocina_id;
		$promocion		   		=	$request->promocion;
		$nombre 				=	$request->nombre;
		$descripcion 			= 	$request->descripcion;
		$calificacion_comida 	= 	$request->calificacion_comida;
		$calificacion_ambiente 	= 	$request->calificacion_ambiente;
		$calificacion_servicio 	= 	$request->calificacion_servicio;
		$ideal_para 			= 	$request->ideal_para;
		$marco_recomienda  		=   $request->marco_recomienda;
		$direccion 				=	$request->direccion;
		$latitud				= 	$request->latitud;
		$longitud				=	$request->longitud;
		$telefono 				=   $request->telefono;
		$web 					= 	$request->web;
		$precio					= 	$request->precio;
		$token 					=   $request->_token;

		if ($request->file('foto')) {
			
			$imagen 		=	$request->file('foto');
			$ruta_imagen 	=	public_path().'/img/';
			$nombre_imagen  =   str_random(6).'_'.$imagen->getClientOriginalName();
			$uploadSuccess 	=   $imagen->move($ruta_imagen, $nombre_imagen);

			$restaurante = Restaurante::where('id', '=', $id)->update(array(
			'zona_id'				=>	$zona_id,
			'plan_id'				=> 	$plan_id,
			'cocina_id'				=>	$cocina_id,
			'promocion'				=> 	$promocion,
			'nombre' 				=>	$nombre,
			'descripcion'			=> 	$descripcion,
			'calificacion_comida'	=> 	$calificacion_comida,
			'calificacion_ambiente' => 	$calificacion_ambiente,
			'calificacion_servicio' => 	$calificacion_servicio,
			'ideal_para'			=> 	$ideal_para,
			'marco_recomienda'		=> 	$marco_recomienda,
			'precio_promedio'		=> 	$precio,
			'foto' 					=> 	$nombre_imagen,
			'_token'				=>	$token
		));

		}

		//Una vez validados los requests
		$restaurante = Restaurante::where('id', '=', $id)->update(array(
			'zona_id'				=>	$zona_id,
			'plan_id'				=> 	$plan_id,
			'cocina_id'				=>	$cocina_id,
			'promocion'				=> 	$promocion,
			'nombre' 				=>	$nombre,
			'descripcion'			=> 	$descripcion,
			'calificacion_comida'	=> 	$calificacion_comida,
			'calificacion_ambiente' => 	$calificacion_ambiente,
			'calificacion_servicio' => 	$calificacion_servicio,
			'ideal_para'			=> 	$ideal_para,
			'marco_recomienda'		=> 	$marco_recomienda,
			'precio_promedio'		=> 	$precio,
			'_token'				=>	$token
		));

		$direccion = Direccion::where('restaurante_id', '=', $id)->update(array(
			'direccion'		=> 	$direccion,
			'latitud'		=>	$latitud,
			'longitud'		=>	$longitud,
			'telefono'		=> 	$telefono,
			'web'			=> 	$web
		));

		return redirect('restaurantes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Restaurante $restaurante)
	{
		//
		$restaurantes = $this->restaurante->whereId($id)->first();
		$restaurantes->delete();
		return redirect('restaurantes');
	}

}
