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
  use App\Http\Controllers\backend\ConsultantController;
  use App\Http\Controllers\Frontend\InstitutionsController;
  use App\Http\Controllers\Backend\CallController;

//*********************************************************************************************************

//  RUTAS FRONTEND

//**********************************************************************************************************

  Route::get('/consultans', [ConsultansController::class, 'index'])->name('consultans');
//Envío del formulario de consultores
  Route::post('/consultans', [ConsultansController::class, 'store'])->name('consultans.store');
  Route::get('/about-us', [AbouUsController::class, 'index'])->name('about-us');
  Route::get('/company', [CompanyController::class, 'index'])->name('company');
  Route::get('/institutions', [InstitutionsController::class, 'index'])->name('institutions');
//Convocatorias
  Route::get('/calls', [CallsController::class, 'index'])->name('calls');
// Detalle de convocatoria
  Route::get('/calls/{call}/detalle', [CallsController::class, 'details'])->name('calls.detail');


  Route::get('/', [HomeController::class, 'index'])->name('home');

//*********************************************************************************************************

//  RUTAS BACKEND / ADMIN - DASHBOARD

//**********************************************************************************************************

  Route::get('/admin', [Dashboard::class, 'index'])->name('backend.dashboard');


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

  Auth::routes();
