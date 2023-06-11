<?php

use App\Enums\ReportStatusEnum;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
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
    Route::post('/sendreport/store', [ReportController::class, 'store'])->name('store');
    Route::get('/report/sendreport', [ReportController::class, 'sendreport'])->name('sendreport');
    Route::post('/report/mark-as-read/{id}', [ReportController::class, 'markAsRead'])->name('report.markasread');
    Route::post('/report/delete/{id}', [ReportController::class, 'delete'])->name('report.delete');
    Route::post('/report/restore/{id}', [ReportController::class, 'restore'])->name('report.resotre');
    Route::get('/report/view', [ReportController::class, 'showreport'])->name('showreport');
    Route::get('/report/archive', [ReportController::class, 'showArchivedReports'])->name('reports.archived');
    Route::get('/analyes', [MainController::class, 'analyes'])->name('analyes');
    Route::get('/request', [MainController::class, 'request'])->name('request');
    Route::get('/', [MainController::class, 'index'])->name('dashboard');
    Route::get('/home', [MainController::class, 'index'])->name('dashboard');
    Route::resource('admins', AdminController::class);
});

Route::prefix('posts')->group(function () {
    // Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/requests', [PostController::class, 'requests'])->name('posts.requests');
    Route::post('/accept/{id}', [PostController::class, 'accept'])->name('posts.accept');
    Route::post('/delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
});

Route::get('login', [AdminController::class, 'getLogin'])->name('get.login')->middleware('guest');
Route::post('login', [AdminController::class, 'login'])->name('login');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/test', function () {
    // ReportStatusEnum::ARCHIVED_REPORT->value;
    // ReportStatusEnum::from(1)->name;
    return view('sendreport');
});
