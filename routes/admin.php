<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ArgumentarVentasController;
use App\Http\Controllers\GestionarPlanesController;
use App\Http\Controllers\VentasRealesController;

Route::get('',[HomeController::class,'index']);
Route::get('gestionarplanes.index',[GestionarPlanesController::class,'index'])->name('gestionarplanes.index');
Route::get('ventasreales.index',[VentasRealesController::class,'index'])->name('ventasreales.index');
Route::get('argumentarventas.index',[ArgumentarVentasController::class,'index'])->name('argumentarventas.index');
