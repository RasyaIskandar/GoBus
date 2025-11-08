<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusClass extends Model
{
    protected $fillable =[
        "name","price","image"
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
