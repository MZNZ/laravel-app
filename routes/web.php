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

Route::get('/contact-us', 'ContactFormController@create')->name('contact.create');
Route::post('/contact-us', 'ContactFormController@store')->name('contact.store');

Route::view('/about', 'about.about')->middleware('test')->name('about');

// Route resource will automatically name the routes so that you don't need to name them
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