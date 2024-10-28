<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\TodoController;


Route::middleware(['auth:sanctum'])->group(function() // Grupo protegido autenticación
{
	Route::get('/', [App\Http\Controllers\TodoController::class, 'index'])->name('dashboard');// Poner siempre el dashboard.
	Route::get('/todo',[App\Http\Controllers\TodoController::class, 'todo_index'])->name('todo.lista');//Vista Index
	Route::post('/store',[App\Http\Controllers\TodoController::class, 'todo_store'])->name('todo.create'); //Metodo crear
	Route::get('/update-view/{id}',[App\Http\Controllers\TodoController::class,'todo_update_view'])->name('todo.update_view'); // Vista actualizar
	Route::put('/update/{id}',[App\Http\Controllers\TodoController::class, 'todo_update'])->name('todo.update');// Metodo actualizar
	Route::delete('/delete/{id}',[App\Http\Controllers\TodoController::class, 'todo_delete'])->name('todo.delete');//Metodo borrado
});