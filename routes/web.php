<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/u/{username}', function ($username) {
    $user = User::firstWhere('nick', $username);
    if ($user) {
        return view('user-profile', ['user' => $user]);
    } else {
        return view('error-page', ['error_message' => 'Usuario no encontrado!']);
    }
})->name('user.profile');