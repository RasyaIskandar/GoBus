<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name', 'customer_identity', 'phone',
        'bus_class_id', 'departure_date', 'total_passengers',
        'elderly_passengers', 'ticket_price', 'discount', 'total_payment'
    ];

    public function BusClass()
    {
        return $this->belongsTo(BusClass::class);
    }
}
