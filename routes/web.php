<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Controller; /**Problem here!! */

use App\Http\Models\Business;

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

// Route::get('businesses', [BusinessController::class, 'index'])->name('businesses.index');

// Route::get('businesses', 'BusinessController@index')->name('businesses.index'); /** Problem Here!! */
