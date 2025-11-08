<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusTravel - Comfortable & Affordable Bus Travel</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-scroll { animation: scroll 40s linear infinite; }
        .hover\:pause-animation:hover { animation-play-state: paused; }

        .shadow-inner-soft { box-shadow: inset 0 2px 4px rgba(0,0,0,0.05); }
        .text-shadow-lg { text-shadow: 0 4px 8px rgba(0,0,0,0.35); }

        .animated-section { opacity:0; transform: translateY(40px); transition: all .8s ease-out; }
        .animated-section.is-visible { opacity:1; transform: translateY(0); }
    </style>
</head>

<body class="bg-gray-100 font-['Inter'] text-gray-700">

<header class="absolute top-0 w-full z-30 py-6 px-6 md:px-12">
    <div class="text-2xl font-bold text-white font-['Poppins']">
        Bus<span class="text-blue-300">Travel</span>
    </div>
</header>

<main>

   <main>

    <!-- HERO -->
    <section class="relative min-h-[600px] md:h-[80vh] bg-gradient-to-b from-blue-800 to-blue-500 flex items-center justify-center text-center px-6">
        <div class="relative z-10 max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-extrabold font-['Poppins'] text-white leading-tight tracking-tight drop-shadow-lg">
                Comfortable & Affordable <br> Bus Travel Services
            </h1>
            <p class="mt-6 text-lg md:text-xl text-blue-100 leading-relaxed">
                Perjalanan aman, cepat, dan dapat diandalkan ke berbagai kota.
            </p>

            <!-- Search Form -->
            <div class="mt-10 bg-white/10 backdrop-blur-xl border border-white/20 p-6 md:p-8 rounded-2xl shadow-xl max-w-2xl mx-auto">
                <form action="{{ route('order.form', $classes->first()->id ?? 1) }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="text" name="departure_city" placeholder="Jakarta" class="p-3 rounded-xl bg-white/20 text-white placeholder-white/70 focus:ring-2 focus:ring-blue-300 outline-none">
                    <input type="text" name="arrival_city" placeholder="Surabaya" class="p-3 rounded-xl bg-white/20 text-white placeholder-white/70 focus:ring-2 focus:ring-blue-300 outline-none">
                    <input type="date" name="departure_date" class="p-3 rounded-xl bg-white/20 text-white focus:ring-2 focus:ring-blue-300 outline-none" value="{{ date('Y-m-d') }}">
                    <button class="bg-white text-blue-700 font-semibold rounded-xl p-3 hover:bg-blue-100 transition">
                        Cari
                    </button>
                </form>
            </div>
        </div>
    </section>


        @isset($classes)
    <section class="py-20 bg-gray-900 text-gray-200 animated-section">
        <h2 class="text-4xl font-bold text-center mb-3 font-['Poppins'] text-white">Kelas Bus Terpopuler</h2>
        <p class="text-center text-gray-400 max-w-xl mx-auto mb-14">
            Pilih tingkat kenyamanan sesuai kebutuhan perjalananmu.
        </p>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($classes as $class)
            <a href="{{ route('order.form', $class->id) }}" class="group p-8 bg-white/5 border border-white/10 backdrop-blur-lg rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <h3 class="text-2xl font-semibold text-white mb-2">{{ $class->name }}</h3>
                <p class="text-gray-300 leading-relaxed text-sm mb-6">
                    {{ $class->description ?? 'Deskripsi singkat kelas' }}
                </p>
                <div class="flex items-center justify-end opacity-60 group-hover:opacity-100 transition">
                    <span class="text-sm font-medium">Lihat Detail</span>
                </div>
            </a>
            @endforeach
        </div>
    </section>
    @endisset

</main>


</main>

<footer class="bg-gray-800 text-gray-300 text-center py-10">
    © {{ date('Y') }} BusTravel — Semua Hak Dilindungi
</footer>

<script>
    const sections = document.querySelectorAll('.animated-section');
    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){ entry.target.classList.add('is-visible'); }
        })
    },{threshold:0.2});
    sections.forEach(sec=>observer.observe(sec));
</script>

</body>
</html>
