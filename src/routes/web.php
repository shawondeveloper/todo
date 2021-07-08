<?php
use Codingwithshawon\Todo\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Codingwithshawon\Todo\Http\Controllers\TodoController'],function () {
    
    Route::get('/todo', [TodoController::class,'index'])->name('todo');

    Route::post('/todo', [TodoController::class,'store'])->name('todo.store');
});