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
    return view('home');
})->name('home');

Route::get('/client', 'ClientController@index')->name('client');
Route::get('/modules', 'ModulesController@index')->name('modules');
Route::get('/plan', 'PlanController@index')->name('plan');
Route::get('/sector', 'SectorController@index')->name('sector');
Route::get('/paspectos', 'PaspectosController@index')->name('paspectos');
Route::get('/perp', 'PerpController@index')->name('perp');
