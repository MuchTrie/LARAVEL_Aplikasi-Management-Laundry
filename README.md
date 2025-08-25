# Aplikasi Management Laundry

<p align="center"><img src="https://laravel.com/img/logotype.min.svg" width="400"></p>

Aplikasi Management Laundry berbasis Laravel 9 untuk mengelola usaha laundry dengan fitur manajemen transaksi, pelanggan, dan layanan.

## Preview Screenshots

### Website Preview
![Website Preview](public/img/ss/screencapture-127-0-0-1-8000-2025-08-25-09_17_18.png)

*Aplikasi ini menampilkan landing page modern dengan desain futuristik dan fitur manajemen laundry yang lengkap.*

## Login Admin
- Email : admin@laundryxyz.com  
- Password : admin123

## Fitur
- Register admin dengan url `/register-admin`. Secret key dapat diubah di env atau default "Secret123".
- Manajemen transaksi laundry
- Manajemen pelanggan
- Laporan dan statistik
- Dan fitur lainnya

## Cara Instalasi Setelah Clone Repository

### Persyaratan Sistem
- PHP 8.0.2 atau lebih tinggi
- Composer
- MySQL atau database lainnya
- Node.js & NPM (untuk asset compilation)

### Langkah Instalasi

1. Clone repository ini
   ```bash
   git clone https://github.com/MuchTrie/Malaundry_Aplikasi-Management-Laundry.git
   cd Malaundry_Aplikasi-Management-Laundry
   ```

2. Install dependency PHP dengan Composer
   ```bash
   composer install
   ```

3. Copy file .env.example menjadi .env
   ```bash
   cp .env.example .env
   ```

4. Generate application key
   ```bash
   php artisan key:generate
   ```

5. Konfigurasi database di file .env
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_anda
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

6. Jalankan migrasi dan seeder
   ```bash
   php artisan migrate:fresh --seed
   ```

7. Install dependency JavaScript dan compile assets (opsional)
   ```bash
   npm install && npm run dev
   ```

8. Buat symbolic link untuk storage
   ```bash
   php artisan storage:link
   ```

9. Jalankan aplikasi
   ```bash
   php artisan serve
   ```

10. Akses aplikasi di browser: http://localhost:8000