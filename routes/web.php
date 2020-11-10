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
    return view('auth.login');
});


Auth::routes(['verify' => false]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('dashboard', 'DashboardController');

Route::resource('customers', 'CustomerController');

Route::resource('produks', 'ProdukController');

Route::resource('invoices', 'InvoiceController');

Route::resource('transaksis', 'TransaksiController');

Route::resource('reports', 'ReportController');
Route::get('/reports/pdf/{invoice}', 'ReportController@invoicePdf')->name('order.pdf');
Route::get('/reports/excel/{invoice}', 'ReportController@invoiceExcel')->name('order.excel');