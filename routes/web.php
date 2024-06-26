<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Frontend\HomeController;


use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\SectorController;
use App\Http\Controllers\Backend\OrganismController;

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

Auth::routes();
