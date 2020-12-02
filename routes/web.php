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

 Route::get('/dashboard', 'DashboardController@index')->middleware('verified');

Route::resource('dashboard', 'DashboardController')->middleware('verified');

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
    Route::get('/{id}','InvoiceController@add')->name('invoice.create');
    // Route::get('/{$id}','InvoiceController@ubah')->name('invoice.edit');
    Route::put('/{id}','InvoiceController@update')->name('invoice.update');
    Route::get('/{id}/delete','InvoiceController@hapus')->name('invoice.hapus');
    Route::delete('/{id}/delete', 'InvoiceController@destroy')->name('invoice.destroy');
    Route::get('/{id}/print','InvoiceController@generateInvoice')->name('invoice.print');
});

Route::resource('statusPembayarans', 'status_pembayaranController');

//route untuk transaksi
    Route::get('/show','TransaksiController@index')->name('transaksi.index');
    Route::get('/add','TransaksiController@add')->name('transaksi.add');
    Route::post('/add','TransaksiController@store')->name('transaksi.store');
    Route::delete('/{id}/delete', 'TransaksiController@destroy')->name('transaksi.destroy');
    Route::get('transaksi/{id}','TransaksiController@edit')->name('transaksi.edit');
    Route::put('transaksi/{id}','TransaksiController@update')->name('transaksi.update');
    // Route::put('/{id}','TransaksiController@show')->name('transaksi.show');
    // Route::delete('/{id}','TransaksiController@delete')->name('transaksi.delete');
    Route::get('naik-status/{id}','TransaksiController@naik_status');

Route::resource('items', 'ItemController');
Route::get('/cetak-laporan/{tglawal}/{tglakhir}','ReportController@cetak')->name('cetak-laporan');

//Route Bahasa
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

Route::get('/user',function(){
    return Auth::user();
});