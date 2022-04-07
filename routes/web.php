<?php

use App\Models\User;
use App\Models\Meme;
use App\Models\Evaluation;
use App\Models\News;
use App\Models\TierList;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MemeController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SearchController;

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

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/signin', [UserController::class, 'signin'])->name('user.signin');

Route::get('/signup', [UserController::class, 'signup'])->name('user.signup');
Route::put('/signup', [UserController::class, 'create'])->name('user.create');

Route::get('/u', [UserController::class, 'index'])->name('user.list');
Route::delete('/u', [UserController::class, 'delete'])->name('user.delete');
Route::post('/u', [UserController::class, 'update'])->name('user.update');
Route::get('/u/{username}', [UserController::class, 'show'])->name('user.show');

Route::get('/m', [MemeController::class, 'index'])->name('meme.list'); // Lista de memes
Route::get('/m/create', [MemeController::class, 'create'])->name('meme.create'); // View de creacion de memes
Route::put('/m', [MemeController::class, 'store'])->name('meme.store'); // Recepcion de formulario de creacion de memes
Route::delete('/m', [MemeController::class, 'delete'])->name('meme.delete'); // Eliminar memes
Route::post('/m', [MemeController::class, 'update'])->name('meme.update'); // Modificar memes
Route::get('/m/{memeId}', [MemeController::class, 'show'])->name('meme.show'); // Ver meme

// Panel de control
Route::get('/admin/users', function () {
    $users = User::all();
    return view('panel-control-user', ['users' => $users]);
})->name('admin.users');

Route::get('/admin/memes', function () {
    $memes = Meme::all();
    return view('panel-control-meme', ['memes' => $memes]);
})->name('admin.memes');

// Route::get('/admin/news', function () {
//     $news = News::all();
//     return view('panel-control-news', ['news' => $news]);
// })->name('admin.news');

// Route::get('/admin/evaluation', function () {
//     $evaluation = Evaluation::all();
//     return view('panel-control-evaluation', ['evaluation' => $evaluation]);
// })->name('admin.evaluation');

// Route::get('/admin/tierlist', function () {
//     $tierlist = TierList::all();
//     return view('panel-control-tier-list', ['tierlist' => $tierlist]);
// })->name('admin.tierlist');
