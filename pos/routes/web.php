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

Route::get('/expense', 'ExpenseController@index')->name('index');

Route::get('/media', 'MediaController@index')->name('index');

Route::get('/people', 'PeopleController@index')->name('index');

Route::get('/report', 'ReportController@index')->name('index');

Route::get('/record', 'RecordController@index')->name('index');

Route::get('/quotation', 'QuotationController@index')->name('index');

Route::get('/purchase', 'PurchaseController@index')->name('index');

Route::get('/return', 'ReturnController@index')->name('index');

Route::get('/sell-order', 'SellOrderController@index')->name('index');

Route::get('/setting', 'SettingController@index')->name('index');












