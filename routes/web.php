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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/consultings','ConsultingController@index');
Route::get('/consultings/create','ConsultingController@create');
Route::post('/consultings','ConsultingController@store');


Route::get('/consultings/{consulting}','ConsultingController@show');
Route::get('/consultings/{consulting}/edit','ConsultingController@edit');
Route::put('/consultings/{consulting}','ConsultingController@update');
Route::get('/consultings/{consulting}/delete','ConsultingController@delete');





