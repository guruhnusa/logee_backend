<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $driver = Driver::first(); // Ambil driver pertama dari database
        $customer = Customer::first(); // Ambil customer pertama dari database

        Order::create([
            'customer_id' => $customer->id,
            'driver_id' => $driver->id,
            'status' => 1,  // Status contoh (1: pending)
            'pickup_address' => 'Jl. Kenanga No. 789',
            'destination_address' => 'Jl. Anggrek No. 987',
        ]);
    }
}
