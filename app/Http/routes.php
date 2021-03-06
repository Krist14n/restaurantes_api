<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Rutas Admin

Route::resource("zonas", "ZonasController");

Route::resource("planes", "PlanesController");

Route::resource("cocinas", "CocinasController");

Route::resource("promociones", "PromocionesController");

Route::resource("restaurantes", "RestaurantesController");

Route::resource("regiones", "RegionesController");

Route::resource("ciudades", "CiudadesController");

Route::resource("restaurantes_internacionales", "RestaurantesInternacionalesController");


//Rutas API

Route::resource("api_cocinas", "ApiCocinasController");

Route::resource("api_planes", "ApiPlanesController");

Route::resource("api_restaurante", "ApiRestauranteController");

Route::resource("api_restaurantes", "ApiRestaurantesController");

Route::resource("api_zonas", "ApiZonasController");

Route::resource("api_cocinas_promocion", "ApiCocinasPromocionController");

Route::resource("api_planes_promocion", "ApiPlanesPromocionController");

Route::resource("api_restaurantes_promocion", "ApiRestaurantesPromocionController");

Route::resource("api_zonas_promocion", "ApiZonasPromocionController");

Route::resource("api_regiones", "ApiRegionesController");

Route::resource("api_ciudades", "ApiCiudadesController");

Route::resource("api_restaurantes_ciudad", "ApiRestaurantesCiudadControlller");

Route::resource("api_restaurante_ciudad", "ApiRestauranteCiudadController");


//Ruta Midas

Route::resource("datos", "DatosController");

