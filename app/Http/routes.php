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
Route::get('/home', function () { return view('home.index');}); //pagina de inicio e informacion del proyecto.
Route::get('/aventuras', function () { return view('adventures.index');}); //pagina de mapa de aventuras (activities)
Route::get('/mi_cuenta', function () { return view('account.index');}); //pagina de cuenta de usuario.
Route::get('/publica_ahora', function () { return view('agency_register.index');}); //pagina de registro de empresas & otros datos.
Route::get('/contactanos', function () { return view('contact.index');}); //pagina de formulario de contacto.

//RUTEOS CONSULTAS ASINCRONICAS (AJAX)

/*--------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------
| EMPRESAS
|--------------------------------------------------------------------------*/
Route::get('/empresas/login', function () { return view('');}); //pagina de login de empresas.
Route::get('/empresas/home', function () { return view('');}); //pagina de inicio de dashboard de la empresa.
Route::get('/empresas/cuenta', function () { return view('');}); //pagina de cuenta de la empresa.
Route::get('/empresas/aventuras', function () { return view('');}); //pagina de gestion de aventuras (activities) de la empresa.
Route::get('/empresas/aventuras/{{id_aventura}}', function () { return view('');}); //pagina de gestion de aventuras (activities) de la empresa.
Route::get('/empresas/rutas/', function () { return view('');}); //pagina de gestion de rutas de aventuras de la empresa.
Route::get('/empresas/rutas/{{id_ruta}}', function () { return view('');}); //pagina de gestion de rutas de aventuras de la empresa.
Route::get('/empresas/aventuras/{{id_aventura}}/participantes', function () { return view('');}); //pagina de gestion de participantes de aventura X (activities) de la empresa.
Route::get('/empresas/aventuras/{{id_aventura}}/solicitudes', function () { return view('');}); //pagina de gestion de solicitudes de aventura X (activities) de la empresa.

//RUTEOS CONSULTAS ASINCRONICAS (AJAX)


/*--------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------
| ADMINISTRACION
|--------------------------------------------------------------------------*/

//RUTEOS CONSULTAS ASINCRONICAS (AJAX)

/*--------------------------------------------------------------------------*/
