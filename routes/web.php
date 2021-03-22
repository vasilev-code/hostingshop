<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
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
    return view('main');
})->name('main');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/registration', function () {
    return view('registration');
})->name('registration');
Route::post('/registration/submit', [RegistrationController::class, 'submit'])->name('registration-form');

