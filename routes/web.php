<?php

use App\Models\Add;
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

Route::get('/', function () {
    return view('List', ['adds' => Add::all()]);
});

Route::get('/List', function () {
    return view('List');
});

Route::get('/create-add', [AddController::class, 'Add']);

Route::post('/create-list', [AddController::class, 'createlist']);

Route::get('/List', [AddController::class, 'readList']);

Route::get('/update/{id}', [AddController::class, 'updateData']);

Route::patch('/update-data/{id}', [AddController::class, 'editData']);

Route::delete('/delete-data/{id}', [AddController::class, 'deleteData']);