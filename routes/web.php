<?php

use App\Http\Controllers\HomeController;
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

Route::get('/login', [HomeController::class, 'Login'])->name('login');
Route::post('/login', [HomeController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [HomeController::class, 'Register'])->name('register');
Route::post('/register', [HomeController::class, 'postRegister'])->name('postRegister');

Route::middleware(['checklogin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');
    Route::get('signout', [HomeController::class, 'SignOut'])->name('signout');
});
