<?php

use App\Http\Controllers\ShoeOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Enums\Role;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Publicly accessible routes
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Registration routes
Route::get('/register', function () {
    return view('auth.register'); // Change as needed
})->name('register');

// Login routes
Route::get('/login', function () {
    return view('auth.login'); // Change as needed
})->name('login');


Route::middleware([
    'auth:sanctum',
    'verified',
    'role:' . Role::Admin->value, // Ensure this is checking for the correct role
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('homepage'); // Redirect after logout
})->name('logout');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/eventregistration', function () {
    return view('eventregistration');
})->name('eventregistration');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('product', \App\Http\Controllers\ProductController::class);

Route::get('/event1/tickets', [TicketController::class, 'event1Tickets'])->name('event1.tickets');
Route::get('/event2/tickets', [TicketController::class, 'event2Tickets'])->name('event2.tickets');
Route::get('/event3/tickets', [TicketController::class, 'event3Tickets'])->name('event3.tickets');

Route::post('/ticket/booking', [TicketController::class, 'bookTicket'])->name('ticket.book');

Route::get('/ticket/confirmation/{referenceNumber}', [TicketController::class, 'confirmation'])->name('ticket.confirmation');

Route::get('/event/tickets', [TicketController::class, 'showEventTickets'])->name('event.tickets');

Route::delete('/ticket/{id}', [TicketController::class, 'delete'])->name('ticket.delete');


Route::get('/customize-shoe', [ShoeOrderController::class, 'showCustomization'])->name('customize-shoe');
Route::post('/submit-customization', [ShoeOrderController::class, 'submitCustomization'])->name('submit-customization');
Route::get('/pre-order', [ShoeOrderController::class, 'showPreOrderForm'])->name('pre-order');
Route::post('/place-order', [ShoeOrderController::class, 'placeOrder'])->name('place-order');

// Route for admin panel (assuming authentication is set up)
Route::get('/admin/orders', [ShoeOrderController::class, 'listOrders'])->name('admin.orders');

Route::get('/admin/orders/{id}', [ShoeOrderController::class, 'viewOrder'])->name('order.view');
Route::delete('/admin/orders/{id}', [ShoeOrderController::class, 'deleteOrder'])->name('order.delete');



