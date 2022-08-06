<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayoutController;

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

Route::get('/execative',[LayoutController::class,'exeIndex'])->name('execative.exeIndex');
Route::get('/execative/create',[LayoutController::class,'exeCreate'])->name('execative.exeCreate');
Route::post('/execative/store',[LayoutController::class,'exeStore'])->name('execative.exeStore');
Route::get('/execative/edit/{id}',[LayoutController::class,'exeEdit'])->name('execative.exeEdit');
Route::post('/execative/edit/update/{id}',[LayoutController::class,'exeUpdate'])->name('execative.exeUpdate');
Route::get('/execative/show/{id}',[LayoutController::class,'exeShow'])->name('execative.exeShow');
Route::delete('/execative/delete/{id}',[LayoutController::class,'exeDelete'])->name('execative.exeDelete');




