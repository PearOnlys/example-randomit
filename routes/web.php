<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StoreController;
use GuzzleHttp\Middleware;
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

Route::get('/', function(){
    return view('home');
});

Route::prefix('store')->controller(StoreController::class)->group(function(){
    Route::get('/list', 'index');
    Route::get('/random', 'random');
    Route::get('/{id}', 'show');
    Route::get('/{id?}', 'create')->middleware(('auth'));
    Route::post('/{id?}', 'store')->middleware(('auth'));
    Route::get('/{id}/edit', 'edit')->middleware(('auth'));
    Route::post('/{id}/edit', 'update')->middleware(('auth'));
});

Route::prefix('category')->controller(CategoryController::class)->group(function(){
    Route::get('/list', 'index');
    Route::get('/{id}', 'show');
    Route::get('/{id?}', 'create')->middleware(('auth'));
    Route::post('/{id?}', 'store')->middleware(('auth'));
});

Route::prefix('delivery')->controller(DeliveryController::class)->group(function(){
    Route::get('/{id}', 'show');
    Route::get('/{id?}', 'create')->middleware(('auth'));
    Route::post('/{id?}', 'store')->middleware(('auth'));
});

Route::prefix('review')->controller(ReviewController::class)->group(function(){
    Route::get('/{store:id}/list', 'index');
    Route::get('/{store:id}/review', 'create')->middleware(('auth'));
    Route::post('/{store:id}/review', 'store')->middleware(('auth'));
});

Route::prefix('register')->middleware('guest')->group(function(){
    Route::get('/', [RegisterController::class, 'create']);
    Route::post('/', [RegisterController::class, 'store']);
});

Route::controller(SessionController::class)->group(function(){
    Route::get('login', 'create')->middleware('guest');
    Route::post('session', 'store');
    Route::post('logout', 'destroy')->middleware('auth');
});

Route::prefix('favourite')->controller(FavouriteController::class)->middleware('auth')->group(function(){
    Route::get('/index', 'index');
    Route::get('/{store:id}', 'store');
    Route::get('/{store:id}/remove', 'destroy');
});