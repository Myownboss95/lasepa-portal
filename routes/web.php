<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('layouts.home');
});

Route::controller(PagesController::class)->group( function () {
    Route::prefix('user')->as('user.')->group(function () {

        Route::get('dashboard', 'userDashboard')->name('dashboard');
        Route::get('login', 'userLogin')->name('login');
        Route::get('register', 'userRegister')->name('login');
        
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
