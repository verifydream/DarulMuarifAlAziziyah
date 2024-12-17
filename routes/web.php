<?php

use App\Http\Controllers\VRController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SantriRegistrationController;
use App\Http\Controllers\WaliSantriController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/vr', [VRController::class, 'index'])->name('vr');
//Registrasi Santri
Route::get('/santri-registration', [SantriRegistrationController::class, 'index'])->name('santri-registration');
Route::post('/santri-registration/store', [SantriRegistrationController::class, 'store'])->name('santri-registration-store');
