<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PageController, RatingController, ArticleController};

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
    return view('welcome');
})->name('home');

Route::get('/about', [PageController::class, 'about']);

Route::get('/rating', [RatingController::class, 'index'])
    ->name('rating');

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');

Route::post('/articles', [ArticleController::class, 'store'])
    ->name('articles.store');

Route::get('/articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');
