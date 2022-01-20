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
Route::get('/management', function(){
    return view('management.index');
});

Route::get('/menu','Menu\MenuController@index');
Route::get('/menu/getMenuByCategory/{category_id}','Menu\MenuController@getMenuByCategory');
Route::get('/menu/getTable','Menu\MenuController@getTables');
Route::get('/menu/getSaleDetailsByTable/{table_id}','Menu\MenuController@getSaleDetailsByTable');

Route::post('/menu/orderFood','Menu\MenuController@orderFood');
Route::post('/menu/deleteSaleDetail','Menu\MenuController@deleteSaleDetail');
Route::post('/menu/confirmOrderStatus','Menu\MenuController@confirmOrderStatus');

Route::post('/menu/savePayment','Menu\MenuController@savePayment');

Route::resource('management/category', 'Management\CategoryController');
Route::resource('management/menu', 'Management\MenuController');
Route::resource('management/table', 'Management\TableController');