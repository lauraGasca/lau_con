<?php

Route::get('/', ['as' => 'home', 'uses' =>'SistemaController@index']);
Route::get('nosotros', ['as' => 'home', 'uses' =>'SistemaController@nosotros']);
Route::get('servicio/{servicio}/{nombre}', ['as' => 'servicio', 'uses' =>'SistemaController@servicio']);
Route::get('servicios', ['as' => 'home', 'uses' =>'SistemaController@servicios']);
Route::get('glosario', ['as' => 'home', 'uses' =>'SistemaController@glosario']);
Route::get('convocatorias', ['as' => 'home', 'uses' =>'SistemaController@convocatorias']);
Route::get('convocatoria/{convocatoria}/{nombre}', ['as' => 'home', 'uses' =>'SistemaController@convocatoria']);
Route::get('contacto', ['as' => 'home', 'uses' =>'SistemaController@contacto']);
Route::post('contacto', ['as' => 'home', 'uses' =>'SistemaController@correo']);

//Funcion para mostrar cuando una pagina no se encuentra
App::missing(function($exception)
{
    return Response::view('errors', array(), 404);
});