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


Route::get('/', function () {
    return view('login.index');
});*/

//Route::get('/', 'LoginControlador@Login');




    Route::get('/', 'LoginController@Login');

    Route::resource('/itens', 'ItensController');

    //Route::get('/itens', 'ItensController@index');

    Route::get('/itens/cadastro', 'ItensController@create');

    Route::get('/notificacoes', 'NotificacoesController@index');

    Route::get('/perfil', 'PerfilController@index');

    Route::get('/anotacoes', 'AnotacoesController@index');







