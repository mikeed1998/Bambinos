<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.front');
// });

use Carbon\Carbon;

Route::name('front.')->group(function(){

	Route::get('/', 'FrontController@index')->name('index');
});

// rutas al admin
Route::namespace("Admin")->prefix('admin')->group(function(){
	
	Route::name('admin.')->group(function(){
		Route::get('/', 'HomeController@index')->name('home');
		Route::get('/nuevo', 'HomeController@create')->name('create');
		Route::get('/users', 'HomeController@show')->name('show');
		Route::post('/guardar', 'HomeController@store')->name('store');
		Route::delete('/delete', 'HomeController@destroy')->name('delete');

		Route::namespace('Auth')->group(function(){
			Route::get('/login', 'LoginController@showLoginForm')->name('login');
			Route::post('/login', 'LoginController@login');
			Route::post('logout', 'LoginController@logout')->name('logout');
		});
		
	});




	// rutas al admin configuraciones
	// controllers dentro de Controllers/Admin/
		Route::prefix('config')->name('config.')->group(function(){
			Route::get('index','ConfiguracionController@index')->name('index');
			Route::get('general','ConfiguracionController@general')->name('general');
			Route::get('contacto','ConfiguracionController@contact')->name('contact');
			Route::get('newpanel','ConfiguracionController@newpanel')->name('newpanel');
		});
		// Route::prefix('config')->name('config.')->group(function(){
		// 	Route::get('index','ConfiguracionController@index')->name('index');
		// });
});

// rutas al admin configuraciones
// controllers dentro de Controllers/
Route::prefix('admin')->group(function(){
	
	Route::prefix('config')->name('config.')->group(function(){
		
		Route::prefix('colores')->name('color.')->group(function(){
			Route::get('/','ColorController@index')->name('index');
			Route::post('/','ColorController@store')->name('store');
			Route::get('editar/{id}','ColorController@edit')->name('edit');
			Route::put('{id}','ColorController@update')->name('update');
			Route::delete('/','ColorController@destroy')->name('delete');
		});

		Route::prefix('sliders')->name('slider.')->group(function(){
			Route::get('/{seccion?}','CarruselController@index')->name('index');
			Route::post('/','CarruselController@store')->name('store');
			Route::delete('/','CarruselController@destroy')->name('delete');
		});
		Route::prefix('usuarios')->name('usuarios.')->group(function(){
			Route::get('/','HomeController@index')->name('index');
		});

		Route::prefix('politicas')->name('politica.')->group(function(){
			Route::get('/','PoliticaController@index')->name('index');
			Route::put('/{id}','PoliticaController@update')->name('update');
		});

		Route::prefix('secciones')->name('seccion.')->group(function(){
			Route::get('/','SeccionController@index')->name('index');
			Route::get('/{slug}','SeccionController@show')->name('show');
			Route::put('/{id}','ElementoController@update')->name('update');

			///////////////////////////////////////////////// global /////////////////////////////////////////////////
			Route::post('/textglobalseccion','SeccionController@textglobalseccion')->name('textglobalseccion');
			///////////////////////////////////////////////// global /////////////////////////////////////////////////


			//Route::post('/checkb','SeccionController@checkb')->name('checkb');


		});

		Route::prefix('faq')->name('faq.')->group(function(){
			Route::get('/','FaqController@index')->name('index');
			Route::get('nueva','FaqController@create')->name('create');
			Route::post('/','FaqController@store')->name('store');
			Route::get('{id}','FaqController@edit')->name('edit');
			Route::put('{id}','FaqController@update')->name('update');
			Route::delete('/','FaqController@destroy')->name('delete');
		});

	});

	Route::prefix('clientes')->name('clientes.')->group(function () {
		Route::get('show','UserController@show')->name('show');
	});
});

// rutas funciones generales
Route::prefix('varios')->name('func.')->group(function(){
	Route::post('editarajax','FuncGenController@editajax')->name('editajax');
	Route::post('orderajax','FuncGenController@orderajax')->name('orderajax');
	// Route::post('toggleajax','FuncGenController@toggleajax')->name('toggleajax');

	Route::post('addcart','CartController@addcart')->name('addcart');
	Route::get('emptycart','CartController@emptycart')->name('emptycart');
	Route::post('getcart','CartController@getcart')->name('getcart');
	Route::get('updatecart','CartController@updatecart')->name('updatecart');
});

Route::post('pruebaajax','FuncGenController@pruebaajax')->name('pruebaajax');

// rutas test
Route::prefix('test')->group(function(){
	Route::get('strand',function(){
		return Str::random(15);
	});
	Route::get('uuid',function(){
		return Str::uuid();
	});
	Route::get('correo',function(){

		$data = array(
			'nombre' => 'Alexis Israel',
			'empresa' => 'Wozial',
			'correo' => 'alexis.israel.rg@gmail.com',
			'whatsapp' => '3325141438',
			'mensaje' => 'A free, fast, and reliable CDN for toastr. ToastrJS is a JavaScript library for Gnome / Growl type non-blocking notifications. jQuery is required.
			',
			'asunto' => 'Formulario de contacto',
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		return view('front.mailcontact',compact('data'));
	});

	Route::get('slug/{key}', function ($llave) {
		return Str::slug($llave,'-');
	});
});

/** rutas de los formularios de contacto */
Route::post('/formularioContac', 'FrontController@mailcontact')->name('formularioContac');


Auth::routes();



Route::prefix('clear')->group(function(){
	//Clear Cache facade value:
	Route::get('/clear-cache', function() {
		$exitCode = Artisan::call('cache:clear');
		return '<h1>Cache facade value cleared</h1>';
	});

	//Reoptimized class loader:
	Route::get('/optimize', function() {
		$exitCode = Artisan::call('optimize');
		return '<h1>Reoptimized class loader</h1>';
	});

	//Route cache:
	Route::get('/route-cache', function() {
		$exitCode = Artisan::call('route:cache');
		return '<h1>Routes cached</h1>';
	});

	//Clear Route cache:
	Route::get('/route-clear', function() {
		$exitCode = Artisan::call('route:clear');
		return '<h1>Route cache cleared</h1>';
	});

	//Clear View cache:
	Route::get('/view-clear', function() {
		$exitCode = Artisan::call('view:clear');
		return '<h1>View cache cleared</h1>';
	});

	//Clear Config cache:
	Route::get('/config-cache', function() {
		$exitCode = Artisan::call('config:cache');
		return '<h1>Clear Config cleared</h1>';
	});
});
