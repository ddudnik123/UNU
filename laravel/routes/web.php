<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExecutorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth', 'verified'])->get('work', [HomeController::class, 'work'])->name('work');
/*Route::middleware(['admin'])->get('/admin', [AdminController::class, 'index'])->name('admin.index');*/


Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/orders-all', [AdminController::class, 'ordersAll'])->name('admin.ordersAll');
    Route::get('/order/{task}', [OrderController::class, 'index'])->name('admin.orderShow');
    Route::get('/approve/{task}', [OrderController::class, 'approve'])->name('admin.taskApprove');
    Route::get('/edit/{task}', [OrderController::class, 'edit'])->name('admin.taskEdit');

});


Route::middleware(['auth', 'verified'])->prefix('customer')->group(function () {
    //Route::get('create', [UserController::class, 'index'])->name('customer.index');
    Route::get('dashboard', [CustomerController::class, 'dashboard'])->name('customer.profile');
    Route::get('orders/{user}', [CustomerController::class, 'orders'])->name('customer.orders');
});

Route::middleware(['auth', 'verified'])->prefix('executor')->group(function () {
    //Route::get('create', [UserController::class, 'index'])->name('customer.index');
    Route::get('dashboard', [ExecutorController::class, 'dashboard'])->name('executor.dashboard');
    //Route::get('orders/{user}', [CustomerController::class, 'orders'])->name('customer.orders');
});


Route::middleware(['auth', 'verified'])->prefix('task')->group(function () {
    Route::get('fast-order', [TaskController::class, 'fastOrder'])->name('task.fastOrder');
    Route::get('create/{categorie}', [TaskController::class, 'create'])->name('task.create');
    Route::get('store', [TaskController::class, 'store'])->name('task.store');
    Route::get('search', [TaskController::class, 'search'])->name('task.search');
    Route::get('show/{task}', [TaskController::class, 'show'])->name('task.show');
    Route::get('update', [TaskController::class, 'update'])->name('task.update');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
