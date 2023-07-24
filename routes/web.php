<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/categories', [CategoriesController::class, 'categories']);
Route::post('/cratecategories', [CategoriesController::class, 'cratecategories']);
Route::get('/categories', [CategoriesController::class, 'categorieslist']);
Route::get('/updatecategorie/{id}', [CategoriesController::class, 'updatecategorie']);
Route::post('/update/{id}', [CategoriesController::class, 'update']);
Route::get('/remove/{id}', [CategoriesController::class, 'remove']);


Route::view('/post', [PostController::class, 'post']);
