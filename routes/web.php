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
    return view('food.form-add');
});

// grooming
Route::get('/grooming', 'GroomingController@index')->name('grooming.index');
Route::get('/grooming/{id}', 'GroomingController@show')->name('grooming.show');
Route::get('/grooming/edit/{id}', 'GroomingController@edit')->name('grooming.edit');
Route::put('/grooming/update/{id}', 'GroomingController@update')->name('grooming.update');
Route::post('/grooming/create', 'GroomingController@create')->name('grooming.create');
Route::post('/grooming/store', 'GroomingController@store')->name('grooming.store');
Route::delete('/grooming/destroy/{id}', 'GroomingController@destroy')->name('grooming.delete');

// food
Route::get('/food', 'FoodController@index')->name('food.index');
Route::get('/food/{id}', 'FoodController@show')->name('food.show');
Route::get('/food/edit/{id}', 'FoodController@edit')->name('food.edit');
Route::put('/food/update/{id}', 'FoodController@update')->name('food.update');
Route::post('/food/create', 'FoodController@create')->name('food.create');
Route::post('/food/store', 'FoodController@store')->name('food.store');
Route::delete('/food/destroy/{id}', 'FoodController@destroy')->name('food.delete');

// order
Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/order/{id}', 'OrderController@show')->name('order.show');
Route::post('/order/create', 'OrderController@create')->name('order.create');
Route::post('/order/store', 'OrderController@store')->name('order.store');
Route::delete('/order/destroy/{id}', 'OrderController@destroy')->name('order.delete');

// transaction
Route::get('/transaction', 'TransactionController@index')->name('transaction.index');
Route::get('/transaction/{id}', 'TransactionController@show')->name('transaction.show');
Route::post('/transaction/create', 'TransactionController@create')->name('transaction.create');
Route::post('/transaction/store', 'TransactionController@store')->name('transaction.store');
Route::delete('/transaction/destroy/{id}', 'TransactionController@destroy')->name('transaction.delete');

// animal
Route::get('/animal', 'AnimalController@index')->name('animal.index');
Route::get('/animal/{id}', 'AnimalController@show')->name('animal.show');
Route::get('/animal/edit/{id}', 'AnimalController@edit')->name('animal.edit');
Route::put('/animal/update/{id}', 'AnimalController@update')->name('animal.update');
Route::post('/animal/create', 'AnimalController@create')->name('animal.create');
Route::post('/animal/store', 'AnimalController@store')->name('animal.store');
Route::delete('/animal/destroy/{id}', 'AnimalController@destroy')->name('animal.delete');

//customer
Route::get('/customer', 'CustomerController@index')->name('customer.index');
Route::get('/customer/{id}', 'CustomerController@show')->name('customer.show');
Route::get('/customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
Route::put('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::post('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
Route::delete('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.delete');

//admin
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/{id}', 'AdminController@show')->name('admin.show');
Route::get('/admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::put('/admin/update/{id}', 'AdminController@update')->name('admin.update');
Route::post('/admin/create', 'AdminController@create')->name('admin.create');
Route::post('/admin/store', 'AdminController@store')->name('admin.store');
Route::delete('/admin/destroy/{id}', 'AdminController@destroy')->name('admin.delete');