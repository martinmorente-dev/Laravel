<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function()
{
	Route::get('/', [App\Http\Controllers\TodoController::class, 'index'])->name('dashboard');
	Route::get('/todo',[App\Http\Controllers\TodoController::class, 'todo_index'])->name('todo.lista');
	Route::post('/store',[App\Http\Controllers\TodoController::class, 'todo_store'])->name('todo.create');
	Route::get('/update-view/{id}',[App\Http\Controllers\TodoController::class,'todo_update_view'])->name('todo.update_view');
	Route::put('/update/{id}',[App\Http\Controllers\TodoController::class, 'todo_update'])->name('todo.update');
	Route::delete('/delete/{id}',[App\Http\Controllers\TodoController::class, 'todo_delete'])->name('todo.delete');
});