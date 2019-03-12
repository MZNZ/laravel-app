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

Route::get('/', 'HomeController@index')->name('home');

Route::get('contact', 'ContactFormController@create');
Route::post('/contact', 'ContactFormController@store');

Route::resource('customers', 'CustomersController');
// Route::get('customers', 'CustomersController@index');
// Route::get('customers/create', 'CustomersController@create');
// Route::post('/customers', 'CustomersController@store');
// Route::get('/customers/{customer}', 'CustomersController@show');
// Route::get('/customers/{customer}/edit', 'CustomersController@edit');
// Route::put('/customers/{customer}', 'CustomersController@update');
// Route::delete('/customers/{customer}', 'CustomersController@destroy');


// '/welcome' page will be used as a start page to build UI with Vue.js
Route::get('/welcome', function() {
  return view('welcome');
});