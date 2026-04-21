# Aplikasi CRUD Produk - Laravel

Aplikasi manajemen produk sederhana menggunakan Laravel framework dengan fitur Create, Read, Update, dan Delete (CRUD).

## 📋 Deskripsi

Project ini adalah aplikasi CRUD sederhana untuk mengelola data produk. Dibuat menggunakan Laravel framework dengan tampilan HTML polos (tanpa CSS) untuk tujuan pembelajaran.

## ✨ Fitur

- ✅ **Create** - Tambah produk baru
- ✅ **Read** - Lihat daftar semua produk
- ✅ **Update** - Edit data produk yang sudah ada
- ✅ **Delete** - Hapus produk
- ✅ **Validasi Form** - Validasi input otomatis
- ✅ **Flash Message** - Notifikasi sukses setelah operasi CRUD

## 📦 Data Produk

Setiap produk memiliki field:
- **Nama** - Nama produk (wajib)
- **Deskripsi** - Deskripsi produk (opsional)
- **Harga** - Harga produk dalam rupiah (wajib, angka)

## 🚀 Cara Install

<!-- 1. Clone repository ini
```bash
 git clone https://github.com/Rival0876/crud-produk.git
2. Masuk ke folder project
    bash
    cd crud-produk
3. Install dependencies
    bash
    composer install
4. Setup environment
    bash
    copy .env.example .env
5. Generate application key
    bash
    php artisan key:generate
6. Buat database
    Buka phpMyAdmin
    Buat database baru dengan nama: crud_db
7. Konfigurasi database
    Edit file .env:
    env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=crud_db
        DB_USERNAME=root
        DB_PASSWORD=
8. Jalankan migration
    bash
    php artisan migrate
9. Jalankan aplikasi
    bash
    php artisan serve
10. Akses aplikasi
    Buka browser dan ketik:
    http://127.0.0.1:8000/produk

📁 Struktur Folder Utama
    crud-sederhana/
├── app/
│   ├── Http/Controllers/
│   │   └── ProdukController.php    # Controller untuk CRUD
│   └── Models/
│       └── Produk.php              # Model Produk
│
├── database/
│   └── migrations/
│       └── xxxx_create_produks_table.php  # Migration tabel produk
│
├── resources/
│   └── views/
│       └── produk/
│           ├── index.blade.php     # Halaman daftar produk
│           ├── create.blade.php    # Form tambah produk
│           └── edit.blade.php      # Form edit produk
│
├── routes/
│   └── web.php                     # Routing aplikasi
│
└── .env                            # Konfigurasi environment

🛠️ Teknologi yang Digunakan
Backend Framework: Laravel 10.x/11.x
Bahasa Pemrograman: PHP 8.x
Database: MySQL/MariaDB
Package Manager: Composer
Template Engine: Blade
Server: PHP Built-in Server

📋 Prerequisites
Pastikan sudah terinstall:
PHP >= 8.1
Composer
MySQL/MariaDB
Web Server (Apache/Nginx) - opsional, bisa pakai PHP built-in server

🐛 Troubleshooting
Error: "Table 'crud_db.sessions' doesn't exist"
Solusi: Pastikan di file .env:
        env
        SESSION_DRIVER=file
        CACHE_STORE=file

Composer install gagal
Solusi: Jalankan composer install --ignore-platform-reqs

👤 Author
Rivaldi Munthe
GitHub: @Rival0876 -->