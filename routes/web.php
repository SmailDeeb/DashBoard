<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/sendreport', [ReportController::class, 'sendreport'])->name('sendreport');
    Route::post('/reports', [ReportController::class, 'store'])->name('store');
    Route::get('/reports', [ReportController::class, 'showreport'])->name('showreport');
    Route::get('/analyes', [MainController::class, 'analyes'])->name('analyes');
    Route::get('/request', [MainController::class, 'request'])->name('request');
    Route::get('/', [MainController::class, 'index'])->name('dashboard');
    Route::get('/home', [MainController::class, 'index'])->name('dashboard');
    Route::resource('admins', AdminController::class);
});

Route::get('login', [AdminController::class, 'getLogin'])->name('get.login')->middleware('guest');
Route::post('login', [AdminController::class, 'login'])->name('login');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/test', function () {
    return view('sendreport');
});
