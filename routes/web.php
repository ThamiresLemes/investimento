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

//Route::get('/', ['uses' => 'Controller@homepage']);
//Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);


//Route::get('/login', ['as'=> 'user.login', 'uses' => 'Controller@login']);
//Route::post('/login', [Controller::class, 'login'])->name('user.login');

Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

/**
 * Routhes to user auth
 * =========================================================================
 * 
 */
Route::get('/login', ['uses' => 'Controller@login']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);
Route::post('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);