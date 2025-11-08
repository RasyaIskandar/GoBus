<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket - {{ $class->name }}</title>
    @vite('resources/css/app.css')

    <style>
        /* Animasi fade-in */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn .6s ease-out forwards;
        }
        @keyframes fadeIn {
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body class="bg-gradient-to-b from-blue-800 via-blue-700 to-blue-500 min-h-screen flex justify-center items-center px-4">

<div class="fade-in bg-white/10 backdrop-blur-xl border border-white/20 p-8 rounded-2xl shadow-2xl max-w-md w-full text-white">

    <h2 class="text-3xl font-bold text-center mb-6 font-['Poppins'] tracking-tight">
        Pesan Tiket
    </h2>

    <p class="text-center text-blue-100 mb-8">
        Kelas: <span class="font-semibold">{{ $class->name }}</span>
    </p>

    <form action="{{ route('order.store') }}" method="POST" class="space-y-5 text-gray-200">
        @csrf
        <input type="hidden" name="bus_class_id" value="{{ $class->id }}">

        <div>
            <label class="block mb-1 text-sm font-medium text-blue-200">Nama Pemesan</label>
            <input type="text" name="customer_name"
                class="w-full p-3 rounded-xl bg-white/20 text-white placeholder-blue-200 focus:ring-2 focus:ring-blue-300 outline-none"
                placeholder="contoh: Andi Permana" required>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-blue-200">No. Identitas (KTP)</label>
            <input type="text" name="customer_identity"
                class="w-full p-3 rounded-xl bg-white/20 text-white placeholder-blue-200 focus:ring-2 focus:ring-blue-300 outline-none"
                placeholder="327xxxx" required>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-blue-200">No. HP</label>
            <input type="text" name="phone"
                class="w-full p-3 rounded-xl bg-white/20 text-white placeholder-blue-200 focus:ring-2 focus:ring-blue-300 outline-none"
                placeholder="08xxxx" required>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-blue-200">Tanggal Keberangkatan</label>
            <input type="date" name="departure_date"
                class="w-full p-3 rounded-xl bg-white/20 text-white placeholder-blue-200 focus:ring-2 focus:ring-blue-300 outline-none"
                required>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-blue-200">Jumlah Penumpang</label>
            <input type="number" name="total_passengers"
                class="w-full p-3 rounded-xl bg-white/20 text-white focus:ring-2 focus:ring-blue-300 outline-none"
                min="1" required>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-blue-200">Penumpang Lansia (Opsional)</label>
            <input type="number" name="elderly_passengers"
                class="w-full p-3 rounded-xl bg-white/20 text-white focus:ring-2 focus:ring-blue-300 outline-none"
                min="0" value="0">
        </div>

        <button type="submit"
            class="w-full bg-white text-blue-700 font-bold py-3 rounded-xl shadow-lg hover:bg-blue-100 hover:scale-[1.02] transition-all">
            Pesan Sekarang
        </button>

        <a href="/"
            class="block text-center text-white/90 border border-white/30 py-3 rounded-xl hover:bg-white/10 transition">
            ← Kembali
        </a>
    </form>

</div>

</body>
</html>
