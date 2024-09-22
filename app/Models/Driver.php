<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    // Nama tabel jika berbeda dengan nama model (opsional)
    protected $table = 'drivers';

    // Definisi relasi dengan model Order (jika ada)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
