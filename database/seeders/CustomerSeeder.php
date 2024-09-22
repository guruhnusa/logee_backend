<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Customer::create([
            'name' => 'Alice Johnson',
            'phone' => '081234567892',
            'email' => 'alice@example.com',
            'address' => 'Jl. Mawar No. 123',
        ]);

        Customer::create([
            'name' => 'Bob Williams',
            'phone' => '081234567893',
            'email' => 'bob@example.com',
            'address' => 'Jl. Melati No. 456',
        ]);
    }
}
