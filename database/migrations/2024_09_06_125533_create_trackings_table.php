<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8); // Tambahkan longitude
            $table->timestamps(); // timestamps otomatis merekam waktu penyimpanan
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
