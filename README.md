<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### 🍽️ Tugas CRUD Laravel 12 - Nadine Septia Vynola
📌 Deskripsi Project
Project ini merupakan aplikasi CRUD (Create, Read, Update, Delete) sederhana berbasis Laravel 12 yang digunakan untuk mengelola data makanan.
Aplikasi ini memungkinkan pengguna untuk menambahkan, melihat, mengedit, dan menghapus data makanan pada database.

### 🛠️ Teknologi yang Digunakan

Berikut teknologi yang digunakan dalam project ini:
⚙️ Laravel 12
🐘 PHP
🗄️ MySQL
🎨 Blade Template
🌐 HTML & CSS

### 🍜 Fitur Utama Aplikasi

✅ Create (Tambah Data Makanan)
Pengguna dapat menambahkan data makanan baru seperti nama makanan, harga, dan deskripsi.
✅ Read (Menampilkan Data)
Sistem menampilkan daftar makanan yang tersimpan di database.
✅ Update (Edit Data)
Pengguna dapat mengubah informasi makanan yang sudah ada.
✅ Delete (Hapus Data)
Pengguna dapat menghapus data makanan dari database.

### 📂 Struktur Project
app/

├── Http/

│   └── Controllers/

│        └── FoodController.php
│
├── Models/
│    └── Food.php
│
database/
└── migrations/
      └── create_foods_table.php

resources/
├── views/
│   └── foods/
│        ├── index.blade.php
│        ├── create.blade.php
│        ├── edit.blade.php
│        └── show.blade.php
routes/
└── web.php

### 🚀 Cara Menjalankan Project
1️⃣ Clone Repository

git clone https://github.com/nadinesptv/crud-makanan-laravel12.git
cd crud-makanan-laravel12

2️⃣ Install Dependency
composer install

3️⃣ Copy File Environment
cp .env.example .env

4️⃣ Generate Application Key
php artisan key:generate

5️⃣ Setup Database
Buat database baru di MySQL, misalnya:db_makanan
Kemudian edit file .env

DB_DATABASE=db_makanan
DB_USERNAME=root
DB_PASSWORD=

6️⃣ Migrasi Database
php artisan migrate


7️⃣ Jalankan Server Laravel
php artisan serve

Buka di browser:
http://127.0.0.1:8000/foods

### 📄 Lisensi

Project ini dibuat untuk keperluan pembelajaran dan latihan pengembangan web.

### 👨‍💻 Author

Nama : Nadine Septia Vynola
Program Studi : Sistem Informasi
NIM :240180026

✨ Terima kasih 
