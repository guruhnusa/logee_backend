<?php

use App\Http\Controllers\ApiController;

// Mendapatkan daftar semua drivers
Route::get('drivers', [ApiController::class, 'getDrivers']);

// Mendapatkan daftar semua customers
Route::get('customers', [ApiController::class, 'getCustomers']);

// Mendapatkan daftar semua orders
Route::get('orders', [ApiController::class, 'getOrders']);

// Mendapatkan tracking berdasarkan order_id
Route::get('trackings/{orderId}', [ApiController::class, 'getTracking']);
