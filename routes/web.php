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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alunos', 'AlunosController');

Route::resource('professores', 'ProfessoresController');

Route::resource('turmas', 'TurmasController');

Route::resource('turma-alunos', 'TurmaAlunosController');

Route::resource('aulas', 'AulasController');

// Route::resource('chamadas', 'ChamadasController');
Route::get('chamadas/{mes}/{ano}', 'ChamadasController@index');
