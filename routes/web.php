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




    Route::resource('/', 'HomeController');

    Route::get('/cadastro', 'HomeController@create')->name('cadastro');

    Route::get('/editar/{id}', 'HomeController@edit')->name('editar');

    Route::get('/cadastro', 'HomeController@create')->name('adicionar');

    Route::get('/excluir/{id}', 'HomeController@destroy')->name('excluir');

    Route::post('store', 'HomeController@store')->name('gravar');


    Route::get('/notificacoes', 'NotificacoesController@index')->name('notificacoes');

    Route::get('/perfil', 'PerfilController@index')->name('perfil');

    Route::get('/anotacoes', 'AnotacoesController@index')->name('anotacoes');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
