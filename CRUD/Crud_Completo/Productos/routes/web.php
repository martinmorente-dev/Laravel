<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\productController::class, 'index'])->name('product.index');			      # Mostrará la página index
Route::post('/create',[App\Http\Controllers\productController::class, 'create'])->name('product.create');     # introducirá los datos y mostrará la vista
Route::get('/list-create',[App\Http\Controllers\productController::class, 'list'])->name('product.list');            # Solo listará los nombres de los productos
Route::get('/update-view/{id}',[App\Http\Controllers\productController::class, 'edit'])->name('product.edit');      # Actualiza
Route::put('/update/{id}',[App\Http\Controllers\productController::class, 'update'])->name('product.update');      # Actualiza
Route::get('/detail/{id}',[App\Http\Controllers\productController::class, 'detail'])->name('product.detail');      # Lista los productos detalladamente
Route::delete('/delete/{id}',[App\Http\Controllers\productController::class, 'delete'])->name('product.delete');   #Borra

// 
// , 'list'