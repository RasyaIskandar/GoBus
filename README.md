GoBus
Sistem pemesanan tiket bus berbasis web. User dapat memilih kelas bus, mengisi data pemesanan, menghitung biaya otomatis termasuk diskon lansia, mencetak struk, dan mengirim struk ke WhatsApp.

TUJUAN
Menyediakan proses pemesanan tiket bus yang cepat, jelas, dan mudah dipahami oleh pengguna umum.

FITUR UTAMA

Tampilan landing page bersih dan responsif

Pemilihan kelas bus

Form pemesanan dengan validasi input

Perhitungan total pembayaran otomatis

Diskon khusus penumpang lansia

Cetak struk siap print

Kirim struk langsung ke WhatsApp

Tanpa sistem login agar penggunaan lebih cepat

TEKNOLOGI
Laravel
Tailwind CSS
MySQL
Vite
HTML CSS JavaScript

STRUKTUR DIRECTORI PENTING
app
Http
Controllers
resources
views
kelas
order
public
images

CARA INSTALL

Clone repository
git clone https://github.com/username/GoBus.git

Masuk folder
cd GoBus

Install dependencies
composer install
npm install

Buat file .env
cp .env.example .env

Atur koneksi database di .env

Generate key
php artisan key:generate

Migrasi database
php artisan migrate

Jalankan project
npm run dev
php artisan serve

CARA PAKAI

Buka halaman utama
http://127.0.0.1:8000

Pilih kelas bus

Isi form pemesanan

Lihat struk dan cetak atau kirim ke WhatsApp

CATATAN
Pastikan folder public/images berisi gambar kelas bus. Jika tidak, aplikasi akan memakai placeholder otomatis.

DEVELOPER
Rasya Iskandar
