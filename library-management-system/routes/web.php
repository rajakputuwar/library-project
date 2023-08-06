<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IssueBookController;
use App\Http\Controllers\ReleaseBookController;
use App\Http\Controllers\UserController;

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
    Route::get('/',[HomeController::class,'index'])->name('userDashboard');
    Route::get('/store',[HomeController::class,'store'])->name('store');
    Route::get('/store/{id}',[HomeController::class,'show'])->name('store.show');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/bookings',[BookingController::class,'store'])->name('bookings.store');

});

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('books', BookController::class);
    Route::resource('issue-books',IssueBookController::class);
    Route::resource('users',UserController::class);
    Route::get('/users/{id}/profile',[UserController::class,'profile'])->name('users.profile');
    Route::get('/returned-books',[ReleaseBookController::class,'index'])->name('returned-books.index');
    Route::get('/books-issue/release/{id}',[ReleaseBookController::class,'release'])->name('issue-books.release');
    Route::get('/bookings',[BookingController::class,'index'])->name('bookings.index');
    Route::get('/bookings/{id}/issue',[BookingController::class,'issue'])->name('bookings.issue');
    Route::delete('/bookings/{id}',[BookingController::class,'destroy'])->name('bookings.destroy');
});


