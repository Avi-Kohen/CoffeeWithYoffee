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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group(function () {

    // routes for menu
    Route::get('/menu', 'Menu\MenuController@index');
    Route::get('/menu/getMenuByCategory/{category_id}', 'Menu\MenuController@getMenuByCategory');
    Route::get('/menu/getTable', 'Menu\MenuController@getTables');
    Route::get('/menu/getSaleDetailsByTable/{table_id}', 'Menu\MenuController@getSaleDetailsByTable');

    Route::post('/menu/orderFood', 'Menu\MenuController@orderFood');
    Route::post('/menu/deleteSaleDetail', 'Menu\MenuController@deleteSaleDetail');
    Route::post('/menu/increase-quantity', 'Menu\MenuController@increaseQuantity');
    Route::post('/menu/decrease-quantity', 'Menu\MenuController@decreaseQuantity');


    Route::post('/menu/confirmOrderStatus', 'Menu\MenuController@confirmOrderStatus');
    Route::post('/menu/savePayment', 'Menu\MenuController@savePayment');
    Route::get('/menu/showReceipt/{saleID}', 'Menu\MenuController@showReceipt');
});

Route::middleware(['auth', 'VerifyAdmin'])->group(function () {
    Route::get('/management', function () {
        return view('management.index');
    });
    //routes for management
    Route::resource('management/category', 'Management\CategoryController');
    Route::resource('management/menu', 'Management\MenuController');
    Route::resource('management/table', 'Management\tableController');
    Route::resource('management/user', 'Management\UserController');
    //routes for report

    Route::get('/report', 'Report\ReportController@index');
    Route::get('/report/show', 'Report\ReportController@show');

    // Export to excel
    Route::get('/report/show/export', 'Report\ReportController@export');
});

Route::post('paypal', array('as' => 'paypal', 'uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status', 'uses' => 'PaypalController@getPaymentStatus',));
