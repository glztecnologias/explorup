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


/*--------------------------------------------------------------------------
| PUBLICO
|--------------------------------------------------------------------------*/

Route::get('/', function () { return redirect('/home');});
Route::get('/home', function () { return view('home.index');}); //pagina de inicio.
Route::get('/aventuras', function () { return view('adventures.index');}); //pagina de inicio.
//Route::get('/lista', function () { return view('lista.index');}); //pagina de inicio.
Route::get('/mi_cuenta', function () { return view('account.index');}); //pagina de inicio.
Route::get('/publica_ahora', function () { return view('agency_register.index');}); //pagina de inicio.
Route::get('/contactanos', function () { return view('contact.index');}); //pagina de inicio.
/*--------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------
| EMPRESAS
|--------------------------------------------------------------------------*/



/*--------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------
| ADMINISTRACION
|--------------------------------------------------------------------------*/



/*--------------------------------------------------------------------------*/
