<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/registro', [UserController::class, 'registry'])->name('registry');
Route::post('/auth', [UserController::class, 'auth'])->name('auth.user');
Route::post('/create', [UserController::class, 'create'])->name('create.user');



Route::middleware(['auth'])->group(function(){

  Route::get('/home', [ContactController::class, 'index'])->name('home');

  Route::get('/logout', [UserController::class, 'destroy'])->name('auth.destroy');

});
