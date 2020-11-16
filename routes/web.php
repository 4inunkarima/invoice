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


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('dashboard', 'DashboardController');

Route::resource('customers', 'CustomerController');

//produk
Route::resource('produks', 'ProdukController');

Route::resource('invoices', 'InvoiceController');

Route::resource('transaksis', 'TransaksiController');

Route::resource('reports', 'ReportController');
Route::get('/reports/pdf/{invoice}', 'ReportController@invoicePdf')->name('order.pdf');
Route::get('/reports/excel/{invoice}', 'ReportController@invoiceExcel')->name('order.excel');

Route::group(['prefix'=>'invoice'],function(){
    Route::get('/new', 'InvoiceController@select')->name('invoice.select');
    Route::post('/', 'InvoiceController@index')->name('invoice.index');
    Route::post('/', 'InvoiceController@save')->name('invoice.store');
    Route::get('/{id}','InvoiceController@edit')->name('invoice.create');
    // Route::get('/{$id}','InvoiceController@ubah')->name('invoice.edit');
    Route::put('/{id}','InvoiceController@update')->name('invoice.update');
    Route::delete('/{id}','InvoiceController@deleteProduk')->name('invoice.delete_produk');
    Route::delete('/{id}/delete', 'InvoiceController@destroy')->name('invoice.destroy');
    Route::get('/{id}/print','InvoiceController@generateInvoice')->name('invoice.print');
});