<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stockcontroller;
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

// Definieer de hoofdroute voor het weergeven van items
Route::resource('/', stockcontroller::class)->only(['index']);

// Aangepaste route voor het tonen van het bewerkingsformulier
Route::get('/{id}/edit', [stockcontroller::class, 'edit'])->name('edit');

// Aangepaste route voor het bijwerken van voorraad
Route::get('/update/{id}', [stockcontroller::class, 'update'])->name('update');