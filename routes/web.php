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

Route::namespace('Admin')->prefix('admin')->group(function(){
   Route::get('products', 'ProductController@index')->name('admin-products-index');
   Route::get('products/add', 'ProductController@add')->name('admin-products-add');
   Route::post('products/add', 'ProductController@create')->name('admin-products-create');
   Route::get('products/{id}', 'ProductController@edit')->name('admin-products-edit');
   Route::post('products/{id}', 'ProductController@update')->name('admin-products-edit');
   Route::get('products/{id}', 'ProductController@delete')->name('admin-products-delete');
});

Route::get('/', 'ProductController@index')->name('index');

Route::get('/catalog/{code}', 'ProductController@view')->name('product-view');
