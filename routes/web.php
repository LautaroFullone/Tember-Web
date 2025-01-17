<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group(function () {
    Route::get('/', 'WebController@index')->name('index');
    Route::get('/acuerdo-negocio', 'WebController@showAcuerdoNegocio')->name('acuerdo-negocio');

    Route::get('/crear-acuerdo', 'AdminController@showCreateAcuerdo')->name('acuerdo.create');
    Route::post('/guardar-acuerdo', 'AcuerdoNegocioController@save')->name('acuerdo.save');


});
