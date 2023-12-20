<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StageController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserStageController;
use App\Http\Controllers\Admin\ClinicUserController;
use App\Http\Controllers\Admin\SubServiceController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\CurrencyListController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\CountryPhoneCodeController;

Route::get('/', DashboardController::class)->name('index');

// Route::resource('appointments', AppointmentController::class);
Route::controller(PagesController::class)->group( function () {
    
         Route::get('login', 'adminLogin')->name('login');
        Route::get('register', 'adminRegister')->name('register');

});