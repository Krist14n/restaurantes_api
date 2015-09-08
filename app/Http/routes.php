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


