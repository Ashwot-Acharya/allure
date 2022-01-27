<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LoginoutController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\RoutingController;


Route::get('/register',[RegisterController::class,'registration'])->name("register");

Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',[DashBoardController::class,'index'])
->name('dashboard')
->middleware('auth');

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LoginoutController::class,'logout'])->name('logout');

Route::get('/home',[PostController::class,'home'])->name('home');

Route::get('/post',[PostController::class,'post'])->name('post')
->middleware('auth');

Route::post('/post',[PostController::class,'store']) -> name('post');
// Route::post('/delete', [DashBoardController::class,'delete'] ) -> name('delete');
Route::get('/post/delete/{id}',[DashBoardController::class, 'delete'] )->name('delete');

Route::get('/',[PostController::class,'home'])->name('/');

