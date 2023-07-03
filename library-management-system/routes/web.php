<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IssueBookController;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('books', BookController::class);
    Route::resource('issue-books',IssueBookController::class);
});
