<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MemeController;
use App\Http\Controllers\EvaluationController;

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
    return view('index');
})->name('index');

Route::get('/crear-meme', function () {
    return view('crear-meme');
})->name('crear-meme');

Route::get('/ranking', function () {
    return view('ranking');
})->name('ranking');

Route::get('/tierlist', function () {
    return view('tierlist');
})->name('tierlist');

// Ruta llamada user.show que al ser llamada, acepta un argumento username
// que pasa al controlador en el metodo show en app/Http/Controllers/UserController.php
Route::get('/u/{username}', [UserController::class, 'show'])->name('user.show');

Route::get('/u', [UserController::class, 'index'])->name('user.list');
