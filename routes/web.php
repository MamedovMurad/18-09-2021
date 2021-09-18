<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\LoginController;
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
Route::get('back/login', [LoginController:: class, 'login'])->name('log_in_get');
Route::post('back/login-post', [LoginController:: class, 'login_post'])->name('log_in');


Route::prefix('back')->middleware('isAdmin')->group(function(){ 
Route::get('/logout', [LoginController:: class, 'logout'])->name('logout');
 

//Dashboard
Route::get('/panel', [DashboardController:: class, 'dashboard'])->name('dashboard');
});
Route::get('/', function () {
    return view('welcome');
});
