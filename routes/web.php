<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;


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
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action'); //action seria criar ou fazer ação
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/edit_action/{id}', [TaskController::class, 'edit_action'])->name('task.edit_action'); //action seria criar ou fazer ação
Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
Route::get('/task', [TaskController::class, 'index'])->name('task.view');
