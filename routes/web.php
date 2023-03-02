<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;
use App\http\controllers\ArticleController;
use App\http\controllers\GradesController;




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

Route::resource('/faq', FaqController::class);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::resource('/grades', GradesController::class);

Route::resource('/blogs', ArticleController::class);









