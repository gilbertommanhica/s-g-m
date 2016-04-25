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

Route::get('/', function () {
    return view('index');
});

Route::get('/alunos', 'AlunoController@lista');

Route::get('/alunos/mostra/{id}', 'AlunoController@mostra');

Route::get('/alunos/cadastro', 'AlunoController@cadastro');

Route::post('/alunos/registar', 'AlunoController@registar');

Route::get('/alunos/remover/{id}', 'AlunoController@remover');

Route::get('/alunos/editar/{id}', 'AlunoController@editar');
Route::put('/alunos/actualizar{id}', 'AlunoController@actualizar');

Route::auth();

Route::get('/home', 'HomeController@index');
