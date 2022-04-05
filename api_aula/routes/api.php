<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('pessoas', 'App\Http\Controllers\ApiController@getPessoas');
Route::get('pessoa/{$id}', 'App\Http\Controllers\ApiController@getPessoa');
Route::post('pessoa', 'App\Http\Controllers\ApiController@createPessoa');
Route::put('pessoa/{$id}', 'App\Http\Controllers\ApiController@updatePessoa');
Route::delete('pessoa/{%id}', 'App\Http\Controllers\ApiController@deletePessoa');


Route::get('disciplinas', 'App\Http\Controllers\ApiController@getDisciplinas');
Route::get('disciplina/{$id}', 'App\Http\Controllers\ApiController@getDisciplina');
Route::post('disciplina', 'App\Http\Controllers\ApiController@createDisciplina');
Route::put('disciplina/{$id}', 'App\Http\Controllers\ApiController@updateDisciplina');
Route::delete('disciplina/{$id}', 'App\Http\Controllers\ApiController@deleteDisciplina')

