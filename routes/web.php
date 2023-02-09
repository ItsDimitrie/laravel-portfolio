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
//
//Route::get('/posts/{post}',  function($post){
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/aboutme', [AboutMeController::class, 'show']);

Route::get('/faq', [FaqController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/posts/{post}', [PostsController::class, 'show']);





