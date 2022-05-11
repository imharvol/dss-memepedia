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
use App\Http\Controllers\AdminPanelController;
use GuzzleHttp\Middleware;

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

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

Route::get('/resultados', function () {
    return view('resultados');
})->name('resultados');

//Route::get('/editar-perfil', function () {
//    return view('editar-perfil');
//})->name('editar-perfil');

Route::get('/noticia-entrada', function () {
    return view('noticia-entrada');
})->name('noticia-entrada');

Route::get('/tierlist', function () {
    return view('tierlist');
})->name('tierlist');

//Route::get('/tierlist-crear', function () {
//    return view('tierlist-crear');
//})->name('tierlist-crear');

Route::get('/tierlist-buscar', function () {
    return view('tierlist-buscar');
})->name('tierlist-buscar');

Route::get('/tierlist-jugar', function () {
    return view('tierlist-jugar');
})->name('tierlist-jugar');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/signin', [UserController::class, 'signin'])->name('user.signin');
Route::post('/signin', [UserController::class, 'postsignin'])->name('user.postsignin');

Route::get('/signup', [UserController::class, 'signup'])->name('user.signup');
Route::put('/signup', [UserController::class, 'create'])->name('user.create');

Route::post('/signout', [UserController::class, 'signout'])->name('user.signout');

Route::get('/u/me', [UserController::class, 'me'])->name('user.me');
Route::get('/u', [UserController::class, 'index'])->name('user.list');
Route::delete('/u', [UserController::class, 'delete'])->name('user.delete');
Route::post('/u', [UserController::class, 'update'])->name('user.update');
Route::get('/u/{username}', [UserController::class, 'show'])->name('user.show');

Route::get('/m', [MemeController::class, 'index'])->name('meme.list'); // Lista de memes
//Route::get('/m/create', [MemeController::class, 'create'])->name('meme.create'); // View de creacion de memes
Route::put('/m', [MemeController::class, 'store'])->name('meme.store'); // Recepcion de formulario de creacion de memes
Route::delete('/m', [MemeController::class, 'delete'])->name('meme.delete'); // Eliminar memes
Route::post('/m', [MemeController::class, 'update'])->name('meme.update'); // Modificar memes
Route::get('/m/{memeId}', [MemeController::class, 'show'])->name('meme.show'); // Ver meme

Route::put('/e', [EvaluationController::class, 'store'])->name('evaluation.store'); // Recepcion de formulario de creacion de evaluations
Route::delete('/e', [EvaluationController::class, 'delete'])->name('evaluation.delete'); // Recepcion de formulario de eliminacion de evaluations
Route::post('/e', [EvaluationController::class, 'update'])->name('evaluation.update'); // Recepcion de formulario de modificacion de evaluations

// Panel de control solo para admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin.interface');
    Route::get('/admin/users', [AdminPanelController::class, 'usersInterface'])->name('admin.users');
    Route::get('/admin/memes', [AdminPanelController::class, 'memesInterface'])->name('admin.memes');
    Route::get('/admin/evaluations', [AdminPanelController::class, 'evaluationsInterface'])->name('admin.evaluations');
});
// Solo si estás logeado puedes entrar
Route::group(['middleware' => 'login'], function () {
    Route::get('/m/create', [MemeController::class, 'create'])->name('meme.create'); // View de creacion de memes
    Route::get('/tierlist-crear', function () {
        return view('tierlist-crear');
    })->name('tierlist-crear');
    Route::get('/editar-perfil', function () {
        return view('editar-perfil');
    })->name('editar-perfil');
});

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
