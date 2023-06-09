<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Models\Admin;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/analyes', [MainController::class, 'analyes'])->name('analyes');
    Route::get('/', [MainController::class, 'index'])->name('dashboard');
    Route::get('/home', [MainController::class, 'index'])->name('dashboard');
    Route::resource('admins', AdminController::class);
});

Route::get('login', [AdminController::class, 'getLogin'])->name('get.login')->middleware('guest');
Route::post('login', [AdminController::class, 'login'])->name('login');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('test', function () {
    return Admin::count();
});
