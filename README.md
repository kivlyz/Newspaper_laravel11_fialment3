# Newspaper Laravel 11 + Filament 3

## 📌 Tentang Proyek

Aplikasi ini adalah sistem manajemen berita berbasis web yang dikembangkan menggunakan **Laravel 11** dan **Filament 3**. Dengan aplikasi ini, Anda dapat mengelola berita, kategori, pengguna, dan peran dengan mudah menggunakan Filament Admin Panel.

---

## 📥 Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di lokal Anda.

### 1️⃣ Clone Repository

Clone repository ini ke mesin lokal Anda dengan perintah berikut:

```bash
git clone https://github.com/kivlyz/Newspaper_laravel11_fialment3.git
```

Masuk ke direktori proyek:

```bash
cd Newspaper_laravel11_fialment3
```

### 2️⃣ Install Dependencies

Jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan:

```bash
composer install
```

### 3️⃣ Konfigurasi Environment

Buat file **.env** dari template yang disediakan:

```bash
cp .env.example .env
```

Atur konfigurasi database di dalam file `.env` sesuai dengan pengaturan lokal Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newspaper_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generate Application Key

Buat key aplikasi dengan perintah berikut:

```bash
php artisan key:generate
```

### 5️⃣ Jalankan Migrasi Database

Jalankan perintah berikut untuk membuat tabel-tabel yang diperlukan dalam database:

```bash
php artisan migrate
```

Jika ingin mengisi database dengan data contoh (seeder), jalankan:

```bash
php artisan db:seed
```

### 6️⃣ Hubungkan Penyimpanan ke Public

Agar file yang diunggah dapat diakses secara publik, jalankan perintah berikut:

```bash
php artisan storage:link
```

### 7️⃣ Buat Pengguna Admin Filament

Buat pengguna administrator untuk mengakses panel Filament:

```bash
php artisan make:filament-user
```

Masukkan informasi pengguna yang diminta.

### 8️⃣ Konfigurasi Filament Shield

Buat pengguna super-admin untuk mengelola peran dan izin:

```bash
php artisan shield:super-admin --user=nama_pengguna
```

Generate dan publish peran serta izin dengan perintah berikut:

```bash
php artisan shield:install
```

### 9️⃣ Jalankan Aplikasi

Jalankan server lokal dengan perintah berikut:

```bash
php artisan serve
```

Akses aplikasi melalui browser di:

```
http://127.0.0.1:8000
```

Untuk masuk ke panel admin Filament:

```
http://127.0.0.1:8000/admin
```

---

## 🔧 Fitur Utama

-   Manajemen berita (tambah, edit, hapus, publish)
-   Kategori berita
-   Pengelolaan pengguna dan peran dengan Filament Shield
-   Upload dan pengelolaan gambar berita
-   Panel admin berbasis Filament 3
-   Sistem autentikasi dan otorisasi

---

## 🛠 Teknologi yang Digunakan

-   **Laravel 11** - Framework utama
-   **Filament 3** - Admin panel
-   **MySQL** - Database
-   **Composer** - Dependency manager
-   **PHP 8.2+** - Bahasa pemrograman utama

---

## 🚀 Deployment

Untuk melakukan deployment ke hosting atau VPS, pastikan Anda:

-   Menggunakan **Apache/Nginx + PHP 8.2+**
-   Menggunakan **MySQL/MariaDB**
-   Menggunakan **Supervisor** untuk menjalankan queue (jika diperlukan)
-   Menyesuaikan `.env` dengan konfigurasi produksi

Jalankan perintah berikut sebelum deployment:

```bash
php artisan optimize:clear
php artisan migrate --force
php artisan db:seed --force
php artisan storage:link
```

---

## 📄 Lisensi

Proyek ini menggunakan lisensi **MIT**. Anda bebas untuk menggunakannya dan mengembangkannya sesuai kebutuhan.

---

## 📞 Kontak

Jika ada pertanyaan atau butuh bantuan, hubungi:

-   **Email**: arielthekillers@gmail.com
-   **Website**: [algoritmakaltim.com](https://algoritmakaltim.com)

Happy coding! 🚀
