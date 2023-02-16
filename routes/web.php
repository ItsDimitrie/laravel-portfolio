<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;
use App\http\controllers\ArticleController;




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

Route::get('/aboutme', [AboutMeController::class, 'show']);

Route::get('/faq', [FaqController::class, 'index']);

Route::get('/faq/create', [FaqController::class, 'create']);

Route::post('/faq', [FaqController::class, 'store']);

Route::get('/faq/{faq}', [FaqController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/blogs', [ArticleController::class, 'index']);

Route::post('/blogs', [ArticleController::class, 'store']);

Route::get('/blogs/create', [ArticleController::class, 'create']);

Route::get('/blogs/{article}', [ArticleController::class, 'show']);








