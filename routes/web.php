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

  Route::get('/contato', [ContactController::class, 'index'])->name('contact');
  Route::get('/contato/novo', [ContactController::class, 'new'])->name('new.contact');
  Route::get('/contato/editar/{id}', [ContactController::class, 'edit'])->name('edit.contact');

  Route::post('/create_contact', [ContactController::class, 'createContact'])->name('create.contact');
  Route::put('/update_contact/{id}', [ContactController::class, 'updateContact'])->name('update.contact');
  Route::delete('/delete_contact/{id}', [ContactController::class, 'deleteContact'])->name('delete.contact');

  Route::get('/logout', [UserController::class, 'destroy'])->name('auth.destroy');

});
