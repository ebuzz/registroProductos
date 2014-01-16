<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('inicio',array('title'=>'Inicio'));
});

Route::get('acerca', function()
{
	return View::make('about',array('title'=>'Acerca'));
});

Route::get('contacto', function()
{
	return View::make('contact',array('title'=>'Contacto'));
});

Route::get('articulos',function()
{
	return View::make('articulos.last',array('title'=>''));
});

Route::get('articulos/publicar',"ArticlesController@showForm");

Route::get('articulos/buscar',"ArticlesController@showArticles");

Route::post('articulo/validar',"ArticlesController@registerArticle");

Route::get('usuarios/registrar',"UsersController@showForm");

Route::post('usuarios/validar',"UsersController@registerUser");



Route::get('new',function(){
	$arreglo = array('nombre' => 'Ramses'); 
 
	// primer parámetro es el arreglo incial
	// segundo parámetro la clave que vamos a agregar
	// tercer parámetro es el valor que vamos a agregar
	$arreglo = array_add($arreglo, 'apellido', 'Velasquez'); 
	var_dump($arreglo);
	
 	$cadena = str_random(20);
	var_dump($cadena);
});

// Pruebas

Route::get('depar',function(){
	$department = new Department;
	$department->nombre = "Jugueteria";
	$department->save();
	return "bien";
});