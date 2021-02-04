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
    return view('users.users.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////Product
Route::get('/add-product', 'ProductController@addProduct')->name('add-product');
Route::post('/save-product', 'ProductController@saveProduct')->name('save-product');
Route::get('/manage-product', 'ProductController@manageProduct')->name('manage-product');
Route::get('/edit-product/{id}', 'ProductController@editProduct')->name('edit-product');
Route::post('/update-product', 'ProductController@updateProduct')->name('update-product');
Route::get('/delete-product/{id}', 'ProductController@deleteProduct')->name('delete-product');
Route::get('/filtered_price', 'ProductController@filteredPrice')->name('filter_price');
Route::get('/filter_date', 'ProductController@filteredDate')->name('filter_date');





