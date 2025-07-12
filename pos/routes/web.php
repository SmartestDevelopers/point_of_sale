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

Route::get('/stocks', 'StockController@index')->name('stocks.index');
Route::get('/stock-add', 'StockController@create')->name('stocks.create');
Route::post('/stocks', 'StockController@store')->name('stocks.store');
Route::get('/stocks/{id}', 'StockController@show')->name('stocks.show');
Route::get('/stocks/{id}/edit', 'StockController@edit')->name('stocks.edit');
Route::put('/stocks/{id}', 'StockController@update')->name('stocks.update');
Route::delete('/stocks/{id}', 'StockController@destroy')->name('stocks.destroy');

Route::resource('sales', 'SaleController');
Route::resource('return-sales', 'ReturnSaleController');

Route::resource('purchases', 'PurchaseController');
Route::resource('return-purchases', 'ReturnPurchaseController');

// Additional Routes for fixing 404 errors
Route::get('/sale-return', 'ReturnSaleController@index')->name('sale-return');
Route::get('/media-setting', function() { return view('media.setting'); });
Route::get('/purchase-add', 'PurchaseController@create')->name('purchase-add');
Route::get('/order-list', function() { return view('orders.index'); });
Route::get('/order-detail', function() { return view('orders.detail'); });
Route::get('/quotations-add', function() { return view('quotations.create'); });
Route::get('/return-add', 'ReturnSaleController@create')->name('return-add');
Route::get('/purchase-return', 'ReturnPurchaseController@index')->name('purchase-return');
Route::get('/purchase-return-add', 'ReturnPurchaseController@create')->name('purchase-return-add');

// Admin & User Management
Route::get('/admin-list', function() { return view('admin.index'); });
Route::get('/roles-permission', function() { return view('admin.roles'); });
Route::get('/billers-list', function() { return view('admin.billers'); });

// Customer & Supplier Management
Route::get('/customer-edit', function() { return view('people.customer-edit'); });

// Accounts & Financial
Route::get('/accounts-list', function() { return view('accounts.index'); });
Route::get('/accounts-balance-sheet', 'ReportController@balanceSheet')->name('accounts-balance-sheet');
Route::get('/accounts-trial-balance', 'ReportController@trialBalance')->name('accounts-trial-balance');
Route::get('/accounts-cashFlow', 'ReportController@cashFlow')->name('accounts-cashflow');
Route::get('/accounts-payment-report', function() { return view('accounts.payment-report'); });

// Expenses
Route::get('/expenses-type', function() { return view('expenses.types'); });

// Reports
Route::get('/purchase-report', 'ReportController@purchaseReport')->name('purchase-report');
Route::get('/sale-report', 'ReportController@salesReport')->name('sale-report');
Route::get('/supplier-report', 'ReportController@supplierReport')->name('supplier-report');
Route::get('/customer-report', 'ReportController@customerReport')->name('customer-report');
Route::get('/stock-report', 'ReportController@stockReport')->name('stock-report');
Route::get('/stock-adjustment-report', function() { return view('reports.stock-adjustment'); });
Route::get('/outofstock-report', function() { return view('reports.outofstock'); });
Route::get('/stock-alert-report', function() { return view('reports.stock-alert'); });
Route::get('/expense-report', function() { return view('reports.expense'); });

// Settings
Route::get('/business-setting-general', function() { return view('settings.business'); });
Route::get('/bussiness-setting', function() { return view('settings.business'); });
Route::get('/website-setting', function() { return view('settings.website'); });
Route::get('/menu-bulider', function() { return view('settings.menu'); });
Route::get('/app-setting', function() { return view('settings.app'); });
Route::get('/warehouse', function() { return view('settings.warehouse'); });
Route::get('/language', function() { return view('settings.language'); });
Route::get('/currency', function() { return view('settings.currency'); });
Route::get('/payment', function() { return view('settings.payment'); });
Route::get('/shippingmethods', function() { return view('settings.shipping'); });
Route::get('/tax', function() { return view('settings.tax'); });
Route::get('/coupons', function() { return view('settings.coupons'); });

// UI Components
Route::get('/buttons', function() { return view('ui.buttons'); });
Route::get('/modals', function() { return view('ui.modals'); });
Route::get('/alerts', function() { return view('ui.alerts'); });
Route::get('/purchases/purchase-add', function() { return view('purchases.purchase-add'); });
Route::get('/warehouse-list', 'WarehouseController@index');
Route::post('/submit-warehouse', 'WarehouseController@submitWarehouse')->name('submitWarehouse');












