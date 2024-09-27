<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AbouUsController;
use App\Http\Controllers\Frontend\CallsController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\ConsultansController;
use App\Http\Controllers\Frontend\InstitutionsController;

use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\SectorController;
use App\Http\Controllers\Backend\OrganismController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ConsultantController;
use App\Http\Controllers\Backend\CallController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\GoogleCalendarController;

//*********************************************************************************************************

//  RUTAS FRONTEND

//**********************************************************************************************************

Route::get('/consultans', [ConsultansController::class, 'index'])->name('consultans');
// Envío del formulario de consultores
Route::post('/consultans', [ConsultansController::class, 'store'])->name('consultans.store');
Route::get('/about-us', [AbouUsController::class, 'index'])->name('about-us');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/institutions', [InstitutionsController::class, 'index'])->name('institutions');
// Envío de datos del formulario de organismos - ONG
Route::post('/institutions', [InstitutionsController::class, 'store'])->name('institutions.store');
// Convocatorias
Route::get('/calls', [CallsController::class, 'index'])->name('calls');
// Detalle de convocatoria
Route::get('/calls/{call}/', [CallsController::class, 'details'])->name('calls.detail');
// Mostrar las convocatorias por paises, según el país que se elija en el mapa de la ruta Home
Route::get('/calls/country/{id}', [CallsController::class, 'callsByCountry'])->name('calls.country');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/google/redirect', [GoogleCalendarController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleCalendarController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/calendar/add', [GoogleCalendarController::class, 'addEventToGoogleCalendar'])->name('calendar.addEventToGoogleCalendar');

Route::get('/calendar/success', function () {
  return view('calendar.success');
})->name('calendar.success');

Route::get('/privacy-policies', function () {
  return view('frontend.policies');
})->name('policies');

//*********************************************************************************************************

//  RUTAS BACKEND / ADMIN - DASHBOARD

//**********************************************************************************************************

Route::get('/admin', [Dashboard::class, 'index'])->name('backend.dashboard');

// Route::resource('admin/sectores', SectorController::class);
Route::resource('admin/usuarios', UserController::class)->parameters([
  'usuarios' => 'user'
]);

// Route::resource('admin/sectores', SectorController::class);
Route::resource('admin/sectores', SectorController::class)->parameters([
  'sectores' => 'sector'
]);

//Organismos
Route::resource('admin/organismos', OrganismController::class)->parameters([
  'organismos' => 'organism'
]);

//Convocatorias
Route::resource('admin/convocatorias', CallController::class)->parameters([
  'convocatorias' => 'call'
]);
// Ruta para actualizar las areas o sectores
Route::patch('admin/convocatorias/{call}/sectores', [CallController::class, 'updateSectors'])->name('convocatorias.updateSectors');

//Consultores
Route::get('admin/consultores', [ConsultantController::class, 'index'])->name('consultants.index');
// Exportar consultores
Route::get('admin/consultores/export', [ConsultantController::class, 'export'])->name('consultants.export');

// Mensajes de contacto
Route::get('admin/mensajes', [MessageController::class, 'index'])->name('messages.index');
// Eliminar mensajes
Route::delete('admin/mensajes/{organism}', [MessageController::class, 'destroy'])->name('messages.destroy');

Auth::routes();
