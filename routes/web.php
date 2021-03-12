<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fichaController;
use App\Http\Controllers\ProgramaFormacionController;

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


    Route::get('ficha',[fichaController::class,'index'])->name('ficha.index');
    Route::get('ficha/crear',[fichaController::class,'create'])->name('ficha.crear');
    Route::post('ficha',[fichaController::class,'store'])->name('ficha.store');
    Route::get('ficha/{id}',[fichaController::class,'show'])->name('ficha.show');
    Route::get('ficha/edit/{id}',[fichaController::class,'edit'])->name('ficha.edit');
    Route::put('ficha/{id}',[fichaController::class,'update'])->name('ficha.update');
    ////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('programa',[ProgramaFormacionController::class,'index'])->name('programa.index');
    Route::get('programa/crear',[ProgramaFormacionController::class,'create'])->name('programa.crear');
    Route::post('programa',[ProgramaFormacionController::class,'store'])->name('programa.store');
    Route::get('programa/{id}',[ProgramaFormacionController::class,'show'])->name('programa.show');
    Route::get('programa/edit/{id}',[ProgramaFormacionController::class,'edit'])->name('programa.show');
    Route::get('programa/{id}',[ProgramaFormacionController::class,'update'])->name('programa.show');



