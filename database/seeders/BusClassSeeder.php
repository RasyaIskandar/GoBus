<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BusClass;

class BusClassSeeder extends Seeder
{
    public function run()
    {
        BusClass::create([
            'name' => 'Ekonomi',
            'price' => 100000,
            'image' => 'ekonomi.jpg',
        ]);

        BusClass::create([
            'name' => 'Bisnis',
            'price' => 150000,
            'image' => 'bisnis.jpg',
        ]);

        BusClass::create([
            'name' => 'Eksekutif',
            'price' => 200000,
            'image' => 'eksekutif.jpg',
        ]);
    }
}


