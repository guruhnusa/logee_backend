<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Order;
use App\Models\Tracking;
use Illuminate\Http\Request;

class ApiController extends Controller
{
     // Mendapatkan daftar semua drivers
     public function getDrivers()
     {
         $drivers = Driver::all();
         return response()->json($drivers);
     }

     // Mendapatkan daftar semua customers
     public function getCustomers()
     {
         $customers = Customer::all();
         return response()->json($customers);
     }

     // Mendapatkan daftar semua orders
     public function getOrders()
     {
         $orders = Order::with('driver', 'customer')->get();
         return response()->json($orders);
     }

     // Mendapatkan tracking berdasarkan order_id
     public function getTracking($orderId)
     {
         $trackings = Tracking::where('order_id', $orderId)->get();
         return response()->json($trackings);
     }
}
