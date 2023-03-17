<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;


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
// Route::get('/search/', [HomeController::class, 'search']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/data/create', [ArticleController::class, 'create']);
Route::get('articles/{id}', [HomeController::class, 'show']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::patch('articles/{id}', [ArticleController::class, 'update']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit']);
Route::get('/about', [HomeController::class, 'about']);

