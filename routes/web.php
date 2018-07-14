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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Hien thi danh muc
Route::get('admin/category', 'Admin\\CategoryController@index');
//Hien thi form them moi danh muc
Route::get('admin/category/add', 'Admin\\CategoryController@create');
//Link luu tru danh muc
Route::post('admin/category/add', 'Admin\\CategoryController@store');
//Edit
Route::get('admin/category/{id}/edit', 'Admin\\CategoryController@edit');
Route::get('admin/color', 'Admin\\ColorController@index');
Route::get('admin/product', 'Admin\\ProductController@index');
Route::get('admin/image', 'Admin\\ImageController@index');