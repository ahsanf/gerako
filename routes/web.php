<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])
->get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/', [HomeController::class,'index' ])->name('home');

Route::get('/about', function(){
    return view('layouts.about');
})->name('about');

Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule')->middleware(['auth:sanctum', 'verified']);
Route::get('/member', [TeamController::class, 'index'])->name('member')->middleware(['auth:sanctum', 'verified']);
// Route::post('logout', 'Api\AuthController@logout')->name('logout');
