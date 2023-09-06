<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stockcontroller;
use App\Http\Controllers\CountriesController;

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

// Definieer de hoofdroute voor het weergeven van de landenlijst
Route::resource('/', CountriesController::class)->only(['index']);

// Aangepaste route voor het tonen van het bewerkingsformulier
Route::get('/country/{id}/edit', [stockcontroller::class, 'edit'])->name('edit');

// Aangepaste route voor het bijwerken van voorraad
Route::get('/country/update/{id}', [stockcontroller::class, 'update'])->name('update');

// Aangepaste route voor het zien van het land dat je geselecteerd hebt
Route::resource('/country', stockcontroller::class)->only(['index']);
