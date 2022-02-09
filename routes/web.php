<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::post('/p',[App\Http\Controllers\PostsController::class, 'store']);
Route::post('/c',[BlogCategoryController::class, 'add']);
Route::post('/a',[ArticleController::class, 'comment']);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/', [App\Http\Controllers\WelcomeController::class ,'index'])->name('welcome.index');
Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class ,'showById'])->name('article.show');
Route::get('/about', [App\Http\Controllers\AboutController::class ,'index'])->name('about.index');
Route::get('/contact', [App\Http\Controllers\ContactController::class ,'index'])->name('contact.index');
// for post
Route::get('/post', [App\Http\Controllers\PostsController::class ,'show'])->name('post.index');

//for message
Route::get('/messages', [App\Http\Controllers\MessagesController::class ,'index'])->name('messages.index');
Route::get('/home',[BlogController::class ,'show'])->name('home.index');
//Route::get('/home',[BlogCategoryController::class ,'show'])->name('home.index');

