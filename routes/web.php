<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProsesController;

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

Route::get('/', function () {
    return view('sec-kalkulator.index2');
});

Route::resource('proses', ProsesController::class);
