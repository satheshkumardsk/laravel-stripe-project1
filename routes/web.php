<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/payments/pay', [App\Http\Controllers\PaymentController::class,'pay'])->name('pay');
Route::get('/payments/approval', [App\Http\Controllers\PaymentController::class,'approval'])->name('payment_approval');
Route::get('/payments/cancellation', [App\Http\Controllers\PaymentController::class,'cancellation'])->name('payment_cancellation');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
