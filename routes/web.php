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

Route::get('/', [TasksController::class, 'index'])->middleware('auth');
Route::post('/tasks', [TasksController::class, 'store'])->middleware('auth');
Route::delete('/tasks/{id}', [TasksController::class, 'destroy'])->middleware('auth');
Route::get('/tasks/search/{id}', [TasksController::class, 'ajaxSearch'])->middleware('auth');;
Route::put('/tasks/update/{id}', [TasksController::class, 'update'])->middleware('auth');;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/dashboard');
})->name('dashboard');


