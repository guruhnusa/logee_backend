<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Tracking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $orderId = 1; // Order ID yang di-track (ubah sesuai kebutuhan)
        $latStart = -6.200000; // Latitude awal
        $lngStart = 106.816666; // Longitude awal

        // Jumlah titik tracking yang akan disimpan (misalnya 50 titik)
        $numTrackings = 50;

        // Loop untuk membuat banyak data latitude dan longitude acak
        for ($i = 0; $i < $numTrackings; $i++) {
            Tracking::create([
                'order_id' => $orderId,
                'latitude' => $latStart + ($i * 0.0001),  // Simulasi perubahan latitude
                'longitude' => $lngStart + ($i * 0.0001), // Simulasi perubahan longitude
                'created_at' => now()->addSeconds($i),   // Simulasi waktu setiap detik
                'updated_at' => now()->addSeconds($i),
            ]);
        }
    }
}
