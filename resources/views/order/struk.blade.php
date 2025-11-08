<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Pemesanan</title>
    @vite('resources/css/app.css')

    <style>
        @media print {
            button, a {display: none !important;}
            body { background: white !important; }
            .card { box-shadow: none !important; border: none !important; }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(12px);
            animation: fadeIn .5s ease-out forwards;
        }
        @keyframes fadeIn {
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex justify-center items-center px-4">

<div class="fade-in card bg-white p-8 rounded-2xl shadow-xl max-w-lg w-full border border-gray-200">

    <!-- Heading -->
    <h1 class="text-3xl font-bold text-center mb-1 font-['Poppins'] text-gray-800">
        Struk Pemesanan
    </h1>
    <p class="text-center text-gray-500 mb-6 text-sm">Tunjukkan struk ini saat keberangkatan</p>

    <!-- Detail Info -->
    <div class="space-y-3 text-gray-700 text-sm">
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">Nama Pemesan</span>
            <span class="font-semibold">{{ $order->customer_name }}</span>
        </div>
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">No. KTP</span>
            <span class="font-semibold">{{ $order->customer_identity }}</span>
        </div>
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">No. HP</span>
            <span class="font-semibold">{{ $order->phone }}</span>
        </div>
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">Kelas Bus</span>
            <span class="font-semibold">{{ $order->busClass->name }}</span>
        </div>
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">Harga Tiket</span>
            <span class="font-semibold">Rp {{ number_format($order->ticket_price,0,',','.') }}</span>
        </div>
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">Total Penumpang</span>
            <span class="font-semibold">{{ $order->total_passengers }} orang</span>
        </div>
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">Lansia</span>
            <span class="font-semibold">{{ $order->elderly_passengers }} orang</span>
        </div>
        <div class="flex justify-between border-b pb-1">
            <span class="text-gray-500">Diskon</span>
            <span class="font-semibold">Rp {{ number_format($order->discount,0,',','.') }}</span>
        </div>
    </div>

    <!-- Total -->
    <div class="mt-6 p-4 rounded-xl bg-blue-50 border border-blue-200 text-center">
        <p class="text-gray-600 text-sm">Total Pembayaran</p>
        <p class="text-2xl font-bold text-blue-700">
            Rp {{ number_format($order->total_payment,0,',','.') }}
        </p>
    </div>

    <!-- Buttons -->
    <div class="mt-8 space-y-3">

        <button onclick="window.print()"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg font-medium transition">
            🖨 Cetak Struk
        </button>

        <a href="/"
           class="block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 py-2.5 rounded-lg font-medium transition">
            ← Kembali
        </a>

        <a href="https://wa.me/?text={{ urlencode(
            'Halo, saya sudah memesan tiket bus:' . "\n\n" .
            'Nama Pemesan: ' . $order->customer_name . "\n" .
            'Nomor KTP: ' . $order->customer_identity . "\n" .
            'No. HP: ' . $order->phone . "\n" .
            'Kelas Bus: ' . $order->busClass->name . "\n" .
            'Total Penumpang: ' . $order->total_passengers . "\n" .
            'Penumpang Lansia: ' . $order->elderly_passengers . "\n" .
            'Total Bayar: Rp ' . number_format($order->total_payment,0,',','.') . "\n\n" .
            'Terima kasih 🙏'
        ) }}"
        target="_blank"
        class="block text-center bg-green-600 hover:bg-green-700 text-white py-2.5 rounded-lg font-medium transition">
            🟢 Kirim Struk via WhatsApp
        </a>

    </div>

</div>

</body>
</html>
