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
Route::get('/admin/', 'admi_home_ctrl@index')->name('admin-home');
Route::get('/admin/administration/', 'admin_admin_ctrl@index');

// admin_customer_ctrl
Route::get('/admin/customer/', 'admin_customer_ctrl@index')->name('admin-customer');
Route::post('/admin/customer/customer-save/', 'admin_customer_ctrl@customer_save');

// admin_provider_ctrl
Route::get('/admin/provider/', 'admin_provider_ctrl@index')->name('admin-provider');
Route::post('/admin/provider/provider-save/', 'admin_provider_ctrl@provider_save');
// admin_transaksi_ctrl
Route::get('/admin/transaksi/', 'admin_transaksi_ctrl@form_transaksi');
Route::post('/admin/transaksi-save','admin_transaksi_ctrl@transaksi_store')->name('transaksi-save');
Route::get('/admin/transaksi-edit/{id}','admin_transaksi_ctrl@transaksi_edit')->name('transaksi-edit');
Route::post('/admin/transaksi-update/{id}','admin_transaksi_ctrl@transaksi_update')->name('transaksi-update');

Route::get('/', function () {
    return view('welcome');
});
