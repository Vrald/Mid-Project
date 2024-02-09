<?php

use App\Http\Controllers\AddController;
use Illuminate\Support\Facades\Route;

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

Route::get('/List', function () {
    return view('List');
});

Route::get('/', function () {
    return view('List');
});

Route::get('/create-add', [AddController::class, 'Add']);

Route::post('/create-list', [AddController::class, 'createlist']);

Route::get('/Lists', [AddController::class, 'readList']);