<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomeController::class, 'index'])->name('index');



Route::prefix('customer')->group(function () {
    //Route::get('create', [UserController::class, 'index'])->name('customer.index');
    Route::get('profile', [CustomerController::class, 'profile'])->name('customer.profile');
});


Route::prefix('task')->group(function () {
    Route::get('fast-order', [TaskController::class, 'fastOrder'])->name('task.fastOrder');
});

Route::get('/', [HomeController::class, 'index']);
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
