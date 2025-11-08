<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        .title { text-align: center; font-size: 20px; margin-bottom: 20px; }
        .line { border-top: 1px solid #333; margin: 15px 0; }
    </style>
</head>
<body>

    <div class="title">Struk Pemesanan Tiket Bus</div>

    <p><strong>Nama:</strong> {{ $order->customer_name }}</p>
    <p><strong>No. KTP:</strong> {{ $order->customer_identity }}</p>
    <p><strong>No. HP:</strong> {{ $order->phone }}</p>
    <p><strong>Kelas Bus:</strong> {{ $order->busClass->name }}</p>
    <p><strong>Harga Tiket:</strong> Rp {{ number_format($order->ticket_price,0,',','.') }}</p>
    <p><strong>Total Penumpang:</strong> {{ $order->total_passengers }}</p>
    <p><strong>Lansia:</strong> {{ $order->elderly_passengers }}</p>
    <p><strong>Diskon:</strong> Rp {{ number_format($order->discount,0,',','.') }}</p>

    <div class="line"></div>

    <p><strong>Total Bayar:</strong> Rp {{ number_format($order->total_payment,0,',','.') }}</p>

</body>
</html>
