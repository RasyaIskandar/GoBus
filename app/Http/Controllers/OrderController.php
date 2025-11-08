<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BusClass;
use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function form($id)
{
    $class = BusClass::findOrFail($id);
    return view('order.form', compact('class'));
}

    public function store(Request $request)
    {
        $class = BusClass::findOrFail($request->bus_class_id);

        $ticket_price = $class->price;
        $discount = ($ticket_price * 0.10) * $request->elderly_passengers;
        $total_payment = ($request->total_passengers * $ticket_price) - $discount;

        $order = Order::create([
            'customer_name' => $request->customer_name,
            'customer_identity' => $request->customer_identity,
            'phone' => $request->phone,
            'bus_class_id' => $class->id,
            'departure_date' => $request->departure_date,
            'total_passengers' => $request->total_passengers,
            'elderly_passengers' => $request->elderly_passengers,
            'ticket_price' => $ticket_price,
            'discount' => $discount,
            'total_payment' => $total_payment,
        ]);

        return redirect("/struk/{$order->id}");
    }

    public function struk($id)
    {
        $order = Order::with('busClass')->findOrFail($id);
        return view('order.struk', compact('order'));
    }

    public function pdf($id)
{
    $order = Order::with('busClass')->findOrFail($id);

    $pdf = Pdf::loadView('order.struk-pdf', compact('order'));

    return $pdf->download('struk-pemesanan-'.$order->id.'.pdf');
}
}
