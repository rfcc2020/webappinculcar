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

Route::get('/','PagesController@index')->name('inicio');
Route::get('/detalle/{id}','PagesController@detalle')->name('notas.detalle');
Route::get('fotos','PagesController@fotos')->name('foto');
Route::get('blog','PagesController@noticias')->name('noticias');
Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');
Route::post('crear','PagesController@crear')->name('notas.crear');