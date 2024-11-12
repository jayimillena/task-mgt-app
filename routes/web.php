<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::get('task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('task/store', [TaskController::class, 'store'])->name('task.store');
