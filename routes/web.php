<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\UserProfileController;

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


Auth::routes();
Route::get('/log-out', function (){
    return view('auth.logout');
})->name('log-out');
Route::middleware('auth')->group(function () {

Route::post('profile-update', [UserProfileController::class, 'update'])->name('profile.update');
Route::get('profile', [UserProfileController::class, 'index'])->name('profile.index');

Route::prefix('user')->as('user.')->middleware('can:is_user')->group(fn () => require_once('user.php'));
Route::prefix('admin')->as('admin.')->middleware('can:is_admin')->group(fn () => require_once('admin.php'));
Route::prefix('staff')->as('staff.')->middleware('can:is_staff')->group(fn () => require_once('staff.php'));
Route::prefix('lab')->as('lab.')->middleware('can:is_staff')->group(fn () => require_once('lab.php'));

});