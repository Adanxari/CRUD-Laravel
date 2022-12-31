<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/testing', function(){
    return view('testing');
});

Route::get('/index', [UserController::class,'index'])->name('index');

Route::get('/create',[UserController::class,'create'])->name('create');

Route::get('/show/{id}',[UserController::class,'show'])->name('show');

Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');

Route::put('/update/{user}',[UserController::class,'update'])->name('update');

Route::post('/store',[UserController::class,'store'])->name('store');

Route::delete('destroy/{user}',[UserController::class,'destroy'])->name('destroy');
