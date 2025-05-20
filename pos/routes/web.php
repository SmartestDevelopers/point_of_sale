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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontController@index')->name('index');

Route::get('/product-list', 'ProductController@index')->name('index');
Route::get('/add-product', 'ProductController@addProduct')->name('addProduct');
Route::post('/submit-product', 'ProductController@submitProduct')->name('submitProduct');



Route::resource('product-units', 'ProductUnits');

Route::get('product-unit-delete/{id}','ProductUnits@productUnitDelete');

Route::post('/product-units/{id}', 'ProductUnits@update')->name('update');

Route::get('/expense-list', 'ExpenseController@index')->name('index');

Route::get('/media-manage', 'MediaController@index')->name('index');

Route::get('/customer-list', 'CustomerController@index')->name('index');
Route::get('/add-customer', 'CustomerController@addCustomer')->name('addCustomer');
Route::post('/submit-customer', 'CustomerController@submitCustomer')->name('submitCustomer');
Route::get('/customer-edit/{id}', 'CustomerController@editCustomer')->name('editCustomer');
Route::post('/customer-update/{id}', 'CustomerController@updateCustomer')->name('updateCustomer');
Route::get('/customer-delete/{id}', 'CustomerController@deleteCustomer')->name('deleteCustomer');

Route::get('/supplier-list', 'SupplierController@index')->name('index');
Route::get('/add-supplier', 'SupplierController@addSupplier')->name('addSupplier');
Route::post('/submit-supplier', 'SupplierController@submitSupplier')->name('submitSupplier');
Route::get('/supplier-edit/{id}', 'SupplierController@editSupplier')->name('editSupplier');
Route::post('/supplier-update/{id}', 'SupplierController@updateSupplier')->name('updateSupplier');
Route::get('/supplier-delete/{id}', 'SupplierController@deleteSupplier')->name('deleteSupplier');

Route::get('/profit-loss-report', 'ReportController@index')->name('index');

Route::get('/record', 'RecordController@index')->name('index');

Route::get('/quotations-list', 'QuotationController@index')->name('index');

Route::get('/purchase-list', 'PurchaseController@index')->name('index');

Route::get('/sale-return', 'ReturnController@index')->name('index');

Route::get('/order-list', 'SellOrderController@index')->name('index');

Route::get('/business-setting-general', 'SettingController@index')->name('index');

Route::get('/warehouse', 'SettingController@index')->name('warehouse');
Route::get('/add-warehouse', 'SettingController@addWarehouse')->name('addWarehouse');
Route::post('/submit-warehouse', 'SettingController@submitWarehouse')->name('submitWarehouse');
Route::get('/warehouse-edit/{id}', 'SettingController@editWarehouse')->name('editWarehouse');
Route::post('/warehouse-update/{id}', 'SettingController@updateWarehouse')->name('updateWarehouse');
Route::get('/warehouse-delete/{id}', 'SettingController@deleteWarehouse')->name('deleteWarehouse');

Route::get('/accounts-list', 'AccountsController@index')->name('index');

Route::resource('product-brands', 'ProductBrands');

Route::resource('product-categories', 'ProductCategoriesController');

Route::resource('product-reviews', 'ProductReviewController');

Route::resource('product-variations', 'ProductVariationsController');











