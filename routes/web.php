<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;




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

Auth::routes();
Route::view('/', 'login')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
//categories
Route::view('/categories', [CategoriesController::class, 'categories']);
Route::post('/cratecategories', [CategoriesController::class, 'cratecategories']);
Route::get('/categories', [CategoriesController::class, 'categorieslist']);
Route::get('/updatecategorie/{id}', [CategoriesController::class, 'updatecategorie']);
Route::post('/update/{id}', [CategoriesController::class, 'update']);
Route::get('/remove/{id}', [CategoriesController::class, 'remove']);

//Post
Route::view('/post', [PostController::class, 'post']);
Route::post('/createpost', [PostController::class, 'createpost']);
Route::get('/post', [PostController::class, 'posts']);
Route::get('/editpost/{id}', [PostController::class, 'editpost']);
Route::post('/updatepost/{id}', [PostController::class, 'updatepost']);
Route::get('/removepost/{id}', [PostController::class, 'removepost']);
