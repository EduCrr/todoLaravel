<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'changeCategory'])->name('changeCategory');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action'); //action seria criar ou fazer ação
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/edit_action/{id}', [TaskController::class, 'edit_action'])->name('task.edit_action'); //action seria criar ou fazer ação
Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
Route::get('/task', [TaskController::class, 'index'])->name('task.view');
Route::get('/change/done/{id}', [TaskController::class, 'changeDone']);




// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
