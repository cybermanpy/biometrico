<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [

	'uses' => 'CheckController@formCheck',

	'as' => 'formcheck_show_path',

]);

Route::get('list', [

	'uses' => 'HomeController@index',

	'as' => 'home_show_path',

]);

Route::get('marcacion/{id}', [

	'uses' => 'CheckController@show', 

	'as' => 'check_show_path'

]);

// Route::get('formcheck', [

// 	'uses' => 'CheckController@formCheck',

// 	'as' => 'formcheck_show_path',

// ]);


Route::post('/', [

	'uses' => 'CheckController@store',

	'as' => 'formcheck_store_path',
]);

// Route::post('formcheck', [

// 	'uses' => 'CheckController@store',

// 	'as' => 'formcheck_store_path',
// ]);


Route::get('form', [

	'uses' => 'CheckController@formCheck1',

	'as' => 'form_show_path',

]);

Route::post('form', [

	'uses' => 'CheckController@store1',

	'as' => 'form_store_path',
]);


// Route::get('checks/{id}', 'CheckController@show');
// Route::get('checkinout', 'HomeController@guardarUsuario');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
//     //
// });


// Route::get('/contacto/{usuario}', function ($usuario) {
// 	return 'Hola yo soy '. $usuario . ' contacto.';
// });