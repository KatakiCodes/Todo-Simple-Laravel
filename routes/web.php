<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
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
  
Route::get('/',[TasksController::class, 'index'])->name('tasks-index');
Route::post('/',[TasksController::class, 'store'])->name('tasks-store');
Route::get('/edit/{id}',[TasksController::class, 'edit'])->where('id','[0-9]+')->name('tasks-edit');
Route::put('/{id}',[TasksController::class, 'update'])->where('id','[0-9]+')->name('tasks-update');
Route::delete('//{id}',[TasksController::class, 'destroy'])->name('tasks-destroy');
