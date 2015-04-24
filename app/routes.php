<?php

Route::get('/', ['as' => 'home', 'uses' =>'SistemaController@index']);
Route::get('nosotros', ['as' => 'home', 'uses' =>'SistemaController@nosotros']);
Route::get('servicios/{servicio}/{id}', ['as' => 'servicio', 'uses' =>'SistemaController@servicio']);
Route::get('servicios', ['as' => 'home', 'uses' =>'SistemaController@servicios']);
Route::get('gestion-proyectos', ['as' => 'home', 'uses' =>'SistemaController@glosario']);
Route::get('convocatorias', ['as' => 'home', 'uses' =>'SistemaController@convocatorias']);
Route::get('convocatorias/{convocatoria}/{id}', ['as' => 'home', 'uses' =>'SistemaController@convocatoria']);
Route::get('contacto', ['as' => 'home', 'uses' =>'SistemaController@contacto']);
Route::post('contacto', ['as' => 'home', 'uses' =>'SistemaController@correo']);

Route::controller('sistema', 'LoginController');
Route::controller('convocatoria', 'ConvocatoriaController');
Route::controller('servicio', 'ServicioController');
Route::controller('frases', 'FraseController');

//Funcion para mostrar cuando una pagina no se encuentra
App::missing(function($exception)
{
    return Response::view('errors.404', array(), 404);
});