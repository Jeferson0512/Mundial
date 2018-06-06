<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Prueba/{id}','JugadoresController@prueba');

//Route::get('/mirar-noticia-bla','NoticiasController@index_Noticia_bla');
//Route::get('/mirar-noticias-bla','NoticiasController@index_Noticia');

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function(){
    //login
    Route::post('/login', 'Auth\ApiController@login');
    
    Route::get('/mirar-jugador','JugadoresController@index_Jugador');
    Route::get('/mirar-pais','JugadoresController@index_Pais');
    Route::get('/mirar-noticia','NoticiasController@index_Noticia');
  //  Route::get('/mirar-noticias','NoticiasController@index_Noticia_bla');    
    Route::get('mirar-evento','EventosController@index_event');
    Route::get('mirar-slider','NoticiasController@show_slider');
    Route::get('mirar-categoria','CategoriasController@show_categorias');
    Route::get('mirar-length','CategoriasController@show_length');
    
    //Vista de paises por continente
    Route::get('/anfitrion','PaisesController@show_anfitrion');
    Route::get('/africa','PaisesController@show_africa');
    Route::get('/sudamerica','PaisesController@show_sudamerica');
    Route::get('/asia','PaisesController@show_asia');
    Route::get('/concacaf','PaisesController@show_concacaf');
    Route::get('/europa','PaisesController@show_europa');
    
    //Vista por grupos de clasificatoria
    Route::get('/grupoA','PaisesController@show_grupoA');
    Route::get('/grupoB','PaisesController@show_grupoB');
    Route::get('/grupoC','PaisesController@show_grupoC');
    Route::get('/grupoD','PaisesController@show_grupoD');
    Route::get('/grupoE','PaisesController@show_grupoE');
    Route::get('/grupoF','PaisesController@show_grupoF');
    Route::get('/grupoG','PaisesController@show_grupoG');
    Route::get('/grupoH','PaisesController@show_grupoH');
    
    Route::get('/mirar-jugador/{id}','JugadoresController@show_jugador');
    Route::get('/mirar-pais/{id}','JugadoresController@show_pais');
    Route::get('/mirar-noticia/{id}','NoticiasController@show_noticia');
    Route::post('/crear-noticia','NoticiasController@store');
    
    
    //Route::resource('pru','NoticiasController');
});