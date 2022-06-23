<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('welcome');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/logout', function () {
    return view('welcome');});

Route::get('/home',[BookController::class,'show']);
Route::get('/search',[BookController::class,'search']);



Route::put('/reserve/{id}',[BookController::class,'reserve']);
Route::post('/like/{id}',[likedBookController::class,'like']);
require __DIR__.'/auth.php';



Route::get('/create',[BookController::class,'create']);
Route::post('/store',[BookController::class,'store']);

Route::get('/edit/{id}',[BookController::class,'edit']);
Route::post('/update/{id}',[BookController::class,'update']);