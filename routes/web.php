<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Models\Articles;
use Symfony\Component\Console\Input\Input;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/data/create', [ArticleController::class, 'create']);
Route::get('articles/{id:slug}', [HomeController::class, 'show']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::patch('articles/{id:slug}', [ArticleController::class, 'update']);
Route::delete('/articles/{id:slug}', [ArticleController::class, 'destroy']);
Route::get('/articles/{id:slug}/edit', [ArticleController::class, 'edit']);
Route::get('/about', [HomeController::class, 'about']);

