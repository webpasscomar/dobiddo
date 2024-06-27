<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Frontend\HomeController;


use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\SectorController;
use App\Http\Controllers\Backend\OrganismController;
use App\Http\Controllers\Frontend\AbouUsController;
use App\Http\Controllers\Frontend\CallsController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\ConsultansController;
use App\Http\Controllers\Frontend\InstitutionsController;
use App\Http\Controllers\Backend\CallController;

Route::get('/consultans', [ConsultansController::class, 'index'])->name('consultans');
Route::get('/about-us', [AbouUsController::class, 'index'])->name('about-us');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/institutions', [InstitutionsController::class, 'index'])->name('institutions');
Route::get('/calls', [CallsController::class, 'index'])->name('calls');

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/admin', [Dashboard::class, 'index'])->name('backend.dashboard');


// Route::resource('admin/sectores', SectorController::class);
Route::resource('admin/sectores', SectorController::class)->parameters([
  'sectores' => 'sector'
]);

//Organismos
Route::resource('admin/organismos', OrganismController::class)->parameters([
  'organismos'=>'organism'
]);

//Convocatorias
Route::resource('admin/convocatorias',CallController::class)->parameters([
  'convocatorias' => 'call'
]);

Auth::routes();
