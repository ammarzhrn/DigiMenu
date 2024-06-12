<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function meja()
    {
        return $this->belongsTo(Meja::class, 'id_meja');
    }
}