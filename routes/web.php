<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;




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

Route::get('/', [WelcomeController::class, 'show']);

Route::get('aboutme', function () {

    return view('aboutme', [
        'articles' => App\Models\Article::latest()->get()
    ]);
});

Route::get('/faq', [FaqController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/blogs/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);

Route::get('/blogs/', [\App\Http\Controllers\ArticleController::class, 'index']);






