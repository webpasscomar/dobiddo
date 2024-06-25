<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Frontend\HomeController;


use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\SectorController;
use App\Http\Controllers\Frontend\AbouUsController;
use App\Http\Controllers\Frontend\CallsController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\ConsultansController;
use App\Http\Controllers\Frontend\InstitutionsController;

Route::get('/consultans', [ConsultansController::class, 'index'])->name('consultans');
Route::get('/about-us', [AbouUsController::class, 'index'])->name('about-us');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/institutions', [InstitutionsController::class, 'index'])->name('institutions');
Route::get('/calls', [CallsController::class, 'index'])->name('calls');
Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/admin', [Dashboard::class, 'index'])->name('backend.dashboard');


Route::resource('admin/sectores', SectorController::class)->parameters([
  'sectores' => 'sector'
]);

Auth::routes();
