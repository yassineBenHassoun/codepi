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
    return view('index');
});


//make group for prefix

// ->name make alias for front page

Route::group(['prefix' => '/products'], function () {
    Route::match(['get', 'post'], '/', 'ProductsController@index');
    Route::match(['get', 'post'], '/add', 'ProductsController@add')->name('products.add');
    Route::match(['get', 'post'], '/edit/{id}', 'ProductsController@edit')->name('products.edit');
    Route::match(['get', 'post'], '/delete/{id}', 'ProductsController@delete');

});

Route::group(['prefix' => '/categories'], function () {
    Route::match(['get', 'post'], '/', 'CategoriesController@index');
    Route::match(['get', 'post'], '/add', 'CategoriesController@add')->name('categories.add');
    Route::match(['get', 'post'], '/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
    Route::match(['get', 'post'], '/delete/{id}', 'CategoriesController@delete');

});