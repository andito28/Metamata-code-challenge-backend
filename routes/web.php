<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
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
    return view('auth.login');
});


Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::post('/post/store',[PostController::class,'store'])->name('post.store');

Route::get('like/{postId}/{userId}',[LikeController::class,'like']);
Route::get('dislike/{postId}/{userId}',[LikeController::class,'dislike']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
