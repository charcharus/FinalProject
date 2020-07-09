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

Route::get('/', function () {
    return view('layouts.master');
});

Route::post('/pertanyaan', 'PertanyaanController@store')->name('pertanyaan.store');

Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('pertanyaan.create');

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit')->name('pertanyaan.edit');

Route::post('/pertanyaan/{id}/update', 'PertanyaanController@update');

Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');

Route::get('/pertanyaan/{id}/delete', 'PertanyaanController@delete');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index')->name('jawaban.index');

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store')->name('jawaban.store');
