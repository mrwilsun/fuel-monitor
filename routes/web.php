<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CarController::class,'index']);

Route::get('/cars/register', [CarController::class,'create'])->name('register');
Route::post('/cars/register', [CarController::class,'store']);
Route::get('/cars/all', [CarController::class,'index'])->name('all_cars');

Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('edit');
Route::put('/cars/{id}', [CarController::class, 'update']);

Route::get('/cars/{id}', [CarController::class,'show'])->name('show');

Route::get('/cars/{id}/delete', [CarController::class, 'destroy'])->name('delete');

Route::get('/logs/all', [LogController::class, 'index'])->name('all_logs');
Route::get('/logs/register', [LogController::class, 'create'])->name('register_log');
Route::post('/logs/register', [LogController::class, 'store']);
Route::get('/logs/{id}', [LogController::class, 'show'])->name('show_log');

Route::get('/test', function(){
    return view ('test');
});