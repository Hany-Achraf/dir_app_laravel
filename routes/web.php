<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\DestinationController;
use App\Http\Controllers\Web\Admin\EventController;

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

Route::get('/', function() {
    return view('welcome');
});

// Destinations routes
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');

Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');


Route::get('/destinations/{id}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
Route::put('/destinations/{id}', [DestinationController::class, 'update'])->name('destinations.update');

Route::delete('destinations/{id}', [DestinationController::class, 'destroy'])->name('destinations.destroy');

// Events routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');


Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');

Route::delete('events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
