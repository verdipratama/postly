<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UploadController;
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

Route::post('/upload', [UploadController::class, 'store']);
Route::get('/upload', [UploadController::class, 'index'])
    ->name('upload')
    ->middleware('guest');
// ->middleware('auth');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/reset', function () {
    return view('pages.auth.reset');
});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| All installer routes is here
|
|
 */

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All routes for admin panel
|
 */
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->middleware('is_admin');
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('user', [UserController::class, 'index'])->name('user');
});
