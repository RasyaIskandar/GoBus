<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BusClass;
use Illuminate\Http\Request;

class BusClassController extends Controller
{
     public function index()
    {
        $classes = BusClass::all();
        return view('kelas.index', compact('classes'));
    }
}
