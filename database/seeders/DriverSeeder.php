<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Driver::create([
            'name' => 'John Doe',
            'phone' => '081234567890',
            'license_number' => 'DL123456',
        ]);

        Driver::create([
            'name' => 'Jane Smith',
            'phone' => '081234567891',
            'license_number' => 'DL654321',
        ]);
    }
}
