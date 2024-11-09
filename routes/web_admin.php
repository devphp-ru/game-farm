<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

Route::middleware([])->prefix('/login')->group(function () {

});

Route::middleware([])->group(function () {
    /** Customs */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    /** Resources */
});
