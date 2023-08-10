<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', HomeController::class)->only(['index', 'edit', 'update']);
Route::get('/{id}/edit', [HomeController::class, 'edit'])->name('edit');
Route::get('/update/{id}', [HomeController::class, 'update'])->name('update');