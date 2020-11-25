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
Route::get('/user', function () {
    return view('website.pages.index');
});
Route::get('/purchase', 'InventoryController@purchase');


Route::get('/sales', 'InventoryController@sales');


Route::get('/inventory', 'InventoryController@inventory'
);

Route::get('/customer','InventoryController@customer');

Route::get('/supplier', 'InventoryController@supplier');



			// store
Route::get('store/purchase','StoreController@purchase' );
Route::post('purchase_add','StoreController@purchase_add');
// Route::post('p_add','storeController@purchase');



Route::get('store/inventory', 'StoreController@inventory');
Route::post('inventory_add','StoreController@inventory_add');


Route::get('store/customer','StoreController@customer');
Route::post('customer_add','StoreController@cus_add');



Route::get('store/supplier', 'StoreController@supplier');
Route::post('sup_add','StoreController@sup_add');

Route::get('store/sales', 'StoreController@sales');
Route::post('s_add','StoreController@sale_add');


Route::get('store/login','AdminController@login');
Route::get('/signup','StoreController@signup');
