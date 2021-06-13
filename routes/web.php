<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PlayerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index']);



Route::get('/blade', function () {
    return view('contoh-templating');
});

Route::get('/create', [StudentController::class, 'create']);

Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players/store', [PlayerController::class, 'store']);

Route::get('/players/edit/{id_player}', [PlayerController::class, 'edit']);
Route::post('/players/update/{id_player}', [PlayerController::class, 'update'])->name('player.update');

Route::get('/players/delete/{id_player}', [PlayerController::class, 'destroy']);