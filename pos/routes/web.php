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
Route::resource('product-variations', 'ProductVariationsController');
Route::resource('product-brands', 'ProductBrands');
Route::resource('product-categories', 'ProductCategoriesController');
Route::resource('product-reviews', 'ProductReviewController');

Route::get('product-unit-delete/{id}','ProductUnits@productUnitDelete');

Route::post('/product-units/{id}', 'ProductUnits@update')->name('update');

Route::get('/expense-list', 'ExpenseController@index')->name('index');

Route::get('/media-manage', 'MediaController@index')->name('index');

Route::get('/customer-list', 'CustomerController@index')->name('index');
Route::get('/add-customer', 'CustomerController@addCustomer')->name('addCustomer');
Route::post('/submit-customer', 'CustomerController@store')->name('add-customer.store');
Route::get('/customer-edit/{id}', 'CustomerController@editCustomer')->name('editCustomer');
Route::post('/customer-update/{id}', 'CustomerController@updateCustomer')->name('customer-update.update');
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


Route::resource('sales', 'SaleController');
Route::resource('return-sales', 'ReturnSaleController');
Route::resource('purchases', 'PurchaseController');
Route::resource('return-purchases', 'ReturnPurchaseController');

Route::prefix('reports')->group(function () {
    Route::get('/sales', 'ReportController@salesReport')->name('reports.sales');
    Route::get('/purchases', 'ReportController@purchaseReport')->name('reports.purchases');
    Route::get('/return-sales', 'ReportController@returnSalesReport')->name('reports.return_sales');
    Route::get('/return-purchases', 'ReportController@returnPurchaseReport')->name('reports.return_purchases');
    Route::get('/stock', 'ReportController@stockReport')->name('reports.stock');
    Route::get('/customer-ledger', 'ReportController@customerLedger')->name('reports.customer_ledger');
    Route::get('/supplier-ledger', 'ReportController@supplierLedger')->name('reports.supplier_ledger');
    Route::get('/trial-balance', 'ReportController@trialBalance')->name('reports.trial_balance');
    Route::get('/profit-loss', 'ReportController@profitLoss')->name('reports.profit_loss');
    Route::get('/balance-sheet', 'ReportController@balanceSheet')->name('reports.balance_sheet');
    Route::get('/cash-flow', 'ReportController@cashFlow')->name('reports.cash_flow');
});














