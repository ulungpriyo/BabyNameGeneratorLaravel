<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\generateController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\namatambahanController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\artikel2Controller;

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
    return view('index');
});

Route::get('/news', [newsController::class, 'index']);

Route::get('/about', [aboutController::class, 'index']);

Route::get('/generate', [generateController::class, 'index']);

Route::get('/addname', [namatambahanController::class, 'index']);

Route::get('/artikel', [artikelController::class, 'index']);

Route::get('/artikel2', [artikel2Controller::class, 'index']);

Route::get('/posts', [namatambahanController::class, 'getName']);

Route::post('/generate', [generateController::class, 'getnameRandom']);

/*Route::post('/generate', 'generateController@getnameRandom');*/

Route::post('/addname', [namatambahanController::class, 'addName'])->name('post.create');

Route::get('/delete-post/{id}',[namatambahanController::class, 'deletePost']);

Route::get('/edit-post/{id}',[namatambahanController::class, 'editPost']);

Route::post('/update-post', [namatambahanController::class, 'updatePost'])->name('post.update');

