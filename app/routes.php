<?php

Route::get('/', ['as' => 'home', 'uses' =>'SistemaController@getIndex']);
Route::get('nosotros', ['as' => 'home', 'uses' =>'SistemaController@getNosotros']);
Route::get('servicios', ['as' => 'home', 'uses' =>'SistemaController@getServicios']);
Route::get('informacion', ['as' => 'home', 'uses' =>'SistemaController@getInformacion']);
Route::get('convocatorias', ['as' => 'home', 'uses' =>'SistemaController@getConvocatorias']);
Route::get('contacto', ['as' => 'home', 'uses' =>'SistemaController@getContacto']);
Route::post('contacto', ['as' => 'home', 'uses' =>'SistemaController@postContacto']);

//Funcion para mostrar cuando una pagina no se encuentra
App::missing(function($exception)
{
    return Response::view('errors', array(), 404);
});