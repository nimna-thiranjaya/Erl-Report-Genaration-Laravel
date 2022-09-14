<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportTwoController;

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

// login routes
Route::get('/login', [WebController::class, 'login']);
Route::post('/login', [UserController::class, "user_login"])->name('user.login');

Route::get('/report_one', [WebController::class, 'report_one'])->name('report_one');

Route::get('/report_two', [WebController::class, 'report_two'])->name('report_two');
Route::post('/report_two_data', [ReportTwoController::class, 'report_two_data'])->name('report_two_data');

Route::get('/dashboard', [WebController::class, 'dashboard_view']);
