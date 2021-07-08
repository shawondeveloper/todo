<?php
use Codingwithshawon\Todo\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Codingwithshawon\Todo\Http\Controllers\TodoController'],function () {
    
    Route::get('/todo', [TodoController::class,'index'])->name('todo');
    Route::get('/details', [TodoController::class,'details'])->name('todo.details');

    Route::post('/todo', [TodoController::class,'store'])->name('todo.store');
});