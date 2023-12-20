<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\SampleController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\TransactionsController;

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/{id}/report', [DashboardController::class, 'report'])->name('report');

Route::prefix('transactions')->controller(TransactionsController::class)->group(function () {
    Route::get('', 'index')->name('transactions');
});
Route::prefix('appointments')->controller(SampleController::class)->group(function () {
    Route::get('', 'index')->name('appointments');
});
Route::controller(PagesController::class)->group( function () {
    
        Route::get('login', 'userLogin')->name('login');
        Route::get('register', 'userRegister')->name('register');
    
});