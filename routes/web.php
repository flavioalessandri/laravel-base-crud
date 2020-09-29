<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
  return view('home');
})-> name('home');

Route::get('/paganti', 'PaganteController@index')->name('paganti.index');
Route::get('/paganti/show/{id}', 'PaganteController@show')->name('paganti.show');


Route::get('/pagamenti', 'PagamentoController@index')->name('pagamenti.index');
Route::get('/pagamenti/delete/{id}', 'PagamentoController@delete')->name('pagamenti.delete');
Route::get('/pagamenti/edite/{id}', 'PagamentoController@edit')->name('pagamenti.edit');
Route::post('/pagamenti/update/{id}', 'PagamentoController@update')->name('pagamenti.update');

Route::get('/posts', 'PostController@index')->name('posts.index');
