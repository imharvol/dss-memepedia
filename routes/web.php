<?php

use App\Models\User;
use App\Models\Meme;
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

Route::get('/ranking', function () {
    return view('ranking');
})->name('ranking');

Route::get('/tierlist', function () {
    return view('tierlist');
})->name('tierlist');

Route::get('/entrada', function () {
    return view('entrada');
})->name('entrada');

Route::get('/comentarios', function () {
    return view('comentarios');
})->name('comentarios');

Route::get('/signin', [UserController::class, 'signin'])->name('user.signin');

Route::get('/signup', [UserController::class, 'signup'])->name('user.signup');
Route::put('/signup', [UserController::class, 'create'])->name('user.create');

// Para tomar como ejemplo:
// Ruta llamada user.show que al ser llamada, acepta un argumento username
// que pasa al controlador en el metodo show en app/Http/Controllers/UserController.php
Route::get('/u/{username}', [UserController::class, 'show'])->name('user.show');

Route::get('/u', [UserController::class, 'index'])->name('user.list');
Route::delete('/u', [UserController::class, 'delete'])->name('user.delete');
Route::post('/u', [UserController::class, 'update'])->name('user.update');

Route::get('/m', [MemeController::class, 'index'])->name('meme.list');

Route::get('/m/create', [MemeController::class, 'create'])->name('meme.create');
Route::put('/m', [MemeController::class, 'store'])->name('meme.store');
Route::delete('/m', [MemeController::class, 'delete'])->name('meme.delete');


// Panel de control
Route::get('/admin/users', function () {
    $users = User::all();
    return view('panel-control-user', ['users' => $users]);
})->name('admin.users');

Route::get('/admin/memes', function () {
    $memes = Meme::all();
    return view('panel-control-meme', ['memes' => $memes]);
})->name('admin.memes');
