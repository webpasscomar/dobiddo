<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Frontend\HomeController;


use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\SectorController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [Dashboard::class, 'index'])->name('backend.dashboard');


Route::resource('admin/sectores', SectorController::class);

Auth::routes();
