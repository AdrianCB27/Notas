<?php

use App\Http\Controllers\AnotationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AnotationController::class,'index'])->name('anotations.index');
Route::get('/anotations/create', [AnotationController::class,'create'])->name('anotations.create');
Route::post('/anotations/store', [AnotationController::class,'store'])->name('anotations.store');
Route::get('/anotations/edit/{id}', [AnotationController::class,'edit'])->name('anotations.edit');
Route::get('/anotations/show/{id}', [AnotationController::class,'show'])->name('anotations.show');
Route::get('/anotations/marcarFav/{id}', [AnotationController::class,'marcarFav'])->name('anotations.marcarFav');
Route::post('/anotations/filtrarFav', [AnotationController::class,'filtrarFav'])->name('anotations.filtrarFav');
Route::post('/anotations/filtrarCategoria', [AnotationController::class,'filtrarCategoria'])->name('anotations.filtrarCategoria');




Route::put('/anotations/update/{id}', [AnotationController::class,'update'])->name('anotations.update');


Route::delete('/anotations/destroy/{id}', [AnotationController::class,'destroy'])->name('anotations.destroy');




