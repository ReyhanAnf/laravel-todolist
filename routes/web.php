<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'registerForm'])->middleware('guest')->name('register');
Route::post('register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('login', [LoginController::class, 'loginForm'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'login'])->middleware('guest');

Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('dashboard', function(){
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('task', [TaskController::class, 'listTask'])->middleware('auth')->name('task');
Route::delete('task/{id}', [TaskController::class, 'destroy'])->middleware('auth');


Route::get('task/add', [TaskController::class, 'addTaskForm'])->middleware('auth')->name('add-task-form');
Route::post('task/add', [TaskController::class, 'create'])->middleware('auth')->name('add-task');

Route::get('task/{id}/edit', [TaskController::class, 'updateTaskForm'])->middleware('auth')->name('edit-task-form');
Route::patch('task/{id}/edit', [TaskController::class, 'update'])->middleware('auth')->name('update-task');
