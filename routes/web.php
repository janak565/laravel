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

Route::get('/companies','CompanyController@index')->name('company.index');
Route::get('/companies/create','CompanyController@create')->name('company.create');
Route::post('/companies/store','CompanyController@store')->name('company.store');
Route::get('/companies/{id}/edit','CompanyController@edit')->name('company.edit');
Route::put('/companies/{id}','CompanyController@update')->name('company.update');
Route::get('/companies/{id}/delete','CompanyController@delete')->name('company.delete');