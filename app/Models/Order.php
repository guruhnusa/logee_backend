<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Nama tabel jika berbeda dengan nama model (opsional)
    protected $table = 'orders';

    // Definisi relasi dengan model Driver
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    // Definisi relasi dengan model Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
