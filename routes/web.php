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

// ------------ Rotas do menu ---------------
 
Route::get('/', 'menuController@index');
Route::get('/cadastro', 'menuController@cadastro');
Route::get('/sobre', 'menuController@sobre');
Route::get('/coleta_seletiva', 'menuController@coleta');
Route::get('/lixeiras', 'menuController@lixeiras');
Route::get('/reciclagem', 'menuController@reciclagem');
Route::get('/desenvolvedores', 'menuController@desenvolvedores');
 
 
// ------------ Rotas do ADM ---------------

Route::get('/adm', 'ADMController@index');
Route::get('/cadastro_funcionarios', 'ADMController@cad_func');
Route::get('/cadastro_noticias', 'ADMController@cad_not');
Route::get('/cadastro_caminhoes', 'ADMController@cad_camnh');
Route::get('/cadastro_pontos', 'ADMController@cad_pontos_coleta');
Route::get('/cadastro_rotas', 'ADMController@cad_rotas');


Route::resource('caminhoes', 'CaminhoesController');
Route::resource('funcionarios', 'FuncionariosController');
Route::resource('noticias', 'NoticiasController');
Route::resource('rotas', 'RotasController');
Route::resource('usuarios', 'UsuariosController');  

