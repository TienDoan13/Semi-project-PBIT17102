<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blueprint;
use Illuminate\Support\Facades\Scheme;
use App\Http\Controllers\BCategoryController;
use App\Http\Controllers\BMovieController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('product', function () {
    return view('admin.page.listMovie');
});

Route::group(['prefix'=>'category'], function(){
    Route::get('/',[BCategoryController::class,'Categoryindex'])->name('admin.category.index');
    Route::get('add/',[BCategoryController::class,'getAddCategory']);
    Route::post('add/',[BCategoryController::class,'postAddCategory'])->name('admin.category.add');
    Route::get('edit/{id}',[BCategoryController::class,'getEditCategory']);
    Route::post('edit/{id}',[BCategoryController::class,'postEditCategory'])->name('admin.category.edit');
    Route::get('delete/{id}',[BCategoryController::class,'deleteCategory']);
});

Route::group(['prefix'=>'movie'], function(){
    Route::get('/',[BMovieController::class,'Movieindex'])->name('admin.movie.index');
    Route::get('add/',[BMovieController::class,'getAddMovie']);
    Route::post('add/',[BMovieController::class,'postAddMovie'])->name('admin.movie.add');
    Route::get('edit/{id}',[BMovieController::class,'getEditMovie']);
    Route::post('edit/{id}',[BMovieController::class,'postEditMovie'])->name('admin.movie.edit');
    Route::get('delete/{id}',[BMovieController::class,'deleteMovie']);
});