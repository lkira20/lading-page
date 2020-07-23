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


Route::get('/', 'TestController@index')->name('test.mostrar');

Route::post('/api/test-hecho', 'TestController@hecho')->name('test.hecho');

Route::get('/api/navegar-express', 'TestController@navegarexpress');
Route::get('/api/navegar-marketplace', 'TestController@navegarmarketplace');
Route::get('/api/navegar-vtex', 'TestController@navegarvtex');

Route::get('/test-tiendas-express', 'TestController@express')->name('test.express');

Route::get('/test-tiendas-marketplace-mc', 'TestController@marketplace')->name('test.marketplace');

Route::get('/test-tiendas-vtex', 'TestController@vtex')->name('test.vtex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
