<?php

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/eventregistration', function () {
    return view('eventregistration');
})->name('eventregistration');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::resource(
    'user',
    \App\Http\Controllers\UserController::class
);

Route::resource(
    'product',
    \App\Http\Controllers\ProductController::class
);






