<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/home',[HomeController::class, 'index'])->name('home');

//menu
Route::get('/master_Entries',[MasterController::class, 'master'])->name('master_Entries');
Route::get('/master_Entries/create',[MasterController::class,'create'])->name('master.create');
Route::get('/master_Entries/search',[MasterController::class,'search'])->name('master.search');
Route::get('/master_Entries/searchplot',[MasterController::class,'searchPlot'])->name('master.searchplot');
Route::post('/master_Entries/create',[MasterController::class,'store'])->name('master.store');
Route::get('/master_Entries/{id}',[MasterController::class,'edit'])->name('master.edit');
Route::post('/master_Entries/update/{id}',[MasterController::class,'update'])->name('master.update');
Route::get('/master_Entries/show/{id}',[MasterController::class,'show'])->name('master.show');
Route::delete('/master_Entries/delete/{id}',[MasterController::class,'destroy'])->name('master.destroy');

Route::get('/admin',[AdminController::class, 'admin'])->name('admin');
Route::get('/admin/create',[AdminController::class,'create'])->name('admin.create');
Route::post('/admin/create',[AdminController::class,'store'])->name('admin.store');


Route::get('/reports',[ReportController::class, 'reports'])->name('reports');
Route::get('/reports/create',[ReportController::class,'create'])->name('reports.create');
Route::post('/reports/create',[ReportController::class,'store'])->name('reports.store');

Route::get('/birthReport',[HomeController::class, 'birthReport'])->name('birthReport');

Route::get('/transaction',[TransactionController::class, 'transaction'])->name('transaction');
Route::get('/transaction/create',[TransactionController::class,'create'])->name('transaction.create');
Route::post('/transaction/create',[TransactionController::class,'store'])->name('transaction.store');

//master
Route::get('/layout',[LayoutController::class,'index'])->name('layout.index');
Route::get('/layout/create',[LayoutController::class,'create'])->name('layout.create');
Route::post('/layout/store',[LayoutController::class,'store'])->name('layout.store');
Route::get('/layout/edit/{id}',[LayoutController::class,'edit'])->name('layout.edit');
Route::post('/layout/edit/update/{id}',[LayoutController::class,'update'])->name('layout.update');
Route::get('/layout/show/{id}',[LayoutController::class,'show'])->name('layout.show');
Route::delete('/layout/delete/{id}',[LayoutController::class,'delete'])->name('layout.delete');

Route::get('/executive',[LayoutController::class,'exeIndex'])->name('execative.exeIndex');
Route::get('/executive/create',[LayoutController::class,'exeCreate'])->name('execative.exeCreate');
Route::post('/executive/store',[LayoutController::class,'exeStore'])->name('execative.exeStore');
Route::get('/executive/edit/{id}',[LayoutController::class,'exeEdit'])->name('execative.exeEdit');
Route::post('/executive/edit/update/{id}',[LayoutController::class,'exeUpdate'])->name('execative.exeUpdate');
Route::get('/executive/show/{id}',[LayoutController::class,'exeShow'])->name('execative.exeShow');
Route::delete('/executive/delete/{id}',[LayoutController::class,'exeDelete'])->name('execative.exeDelete');


Route::get('/search',[LayoutController::class,'search'])->name('search');
Route::get('/master_Entries/searchplot',[MasterController::class,'searchPlot'])->name('master.searchplot');

// landowner_detail
Route::get('landownerdetails',[MenuController::class,'landownerdetails_view']);
Route::get('landowner_create',[MenuController::class,'landownerdetails_create']);
Route::post('landownerdetail_insert',[MenuController::class,'landowner_insert'])->name('landowner.create');
Route::get('/landowner/edit/{id}',[MenuController::class,'landowner_edit'])->name('landowner.edit');
Route::post('/landowner/edit/update/{id}',[MenuController::class,'landowner_update'])->name('landowner.update');
Route::get('/landowner/show/{id}',[MenuController::class,'landowner_show'])->name('landowner.show');
Route::delete('/landowner/delete/{id}',[MenuController::class,'landowner_delete'])->name('landowner.delete');

// receiptDetails
Route::get('/receiptDetails',[MenuController::class,'receipt_view']);
Route::get('/receiptDetails_create',[MenuController::class,'receipt_create']);
Route::post('/receiptDetails_insert',[MenuController::class,'receipt_insert'])->name('receipt.create');
Route::get('/receipt/edit/{id}',[MenuController::class,'receipt_edit'])->name('receipt.edit');
Route::post('/receipt/edit/update/{id}',[MenuController::class,'receipt_update'])->name('receipt.update');
Route::get('/receipt/show/{id}',[MenuController::class,'receipt_show'])->name('receipt.show');
Route::delete('/receipt/delete/{id}',[MenuController::class,'receipt_delete'])->name('receipt.delete');

Route::get('/advisor_promotion',[MenuController::class,'advisor_promotion']);
Route::post('/advisor_promotion_insert',[MenuController::class,'advisor_insert'])->name('advisor.create');
Route::get('/advisor/edit/{id}',[MenuController::class,'advisor_edit'])->name('advisor.edit');
Route::post('/advisor/edit/update/{id}',[MenuController::class,'advisor_update'])->name('advisor.update');
Route::delete('/advisor/delete/{id}',[MenuController::class,'advisor_delete'])->name('advisor.delete');

Route::get('daily_sales',[ReportController::class,'daily_sales'])->name('daily.create');
Route::get('daily_sales/show/{id}',[ReportController::class,'daily_show'])->name('daily.show');
Route::get('customers_details',[ReportController::class,'customersDetails']);

// monthly
Route::get('/monthly',[AdminController::class,'getdate'])->name('monthly.business');
Route::get('/monthly/show/{id}',[MasterController::class,'show'])->name('data.show');
