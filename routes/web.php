<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConstructorController;

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
})->name('home');

Route::get('/icewall', function () {
    return view('icewall/index');
})->name('icewall');

Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('user/dashboard');
})->name('user.dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->name('admin.dashboard');

Route::middleware(['is_admin'])->group(function () {
    Route::resource('constructors', ConstructorController::class);
});


