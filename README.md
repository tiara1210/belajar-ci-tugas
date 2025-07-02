# 🛒 Aplikasi Toko - CodeIgniter 4 Application Starter

Aplikasi toko ini dibangun menggunakan **CodeIgniter 4**, sebuah PHP framework ringan dan fleksibel. Aplikasi mendukung fitur manajemen produk, diskon otomatis, checkout, otentikasi user, dan manajemen admin, lengkap dengan integrasi web service berbasis API sederhana.

---

## ✨ Fitur Aplikasi

### 🔐 Autentikasi & Role
- Login, logout, dan register
- Sistem role: `admin` & `user`
- Middleware `authAdmin` untuk proteksi halaman

### 📦 Produk & Diskon
- CRUD produk (admin)
- CRUD diskon (admin), hanya berlaku di tanggal tertentu
- Diskon diterapkan otomatis saat checkout jika tersedia

### 🛒 Checkout & Transaksi
- Tambah produk ke keranjang
- Validasi checkout
- Flash message saat sukses
- Simpan data ke `transaksi` & `detail_transaksi`
- Pengurangan stok produk otomatis

### 📜 Riwayat & Manajemen Transaksi
- User: melihat riwayat pembelian
- Admin: melihat semua transaksi & ubah status
- Modal detail pembelian & status pesanan

### 🌐 Web Service
- Endpoint JSON untuk data produk (API sederhana)

---

## ⚙️ Instalasi Proyek

### 1. Clone Repositori
```bash
git clone https://github.com/tiara1210/belajar-ci-tugas.git
cd belajar-ci-tugas

1. Install Dependency
```bash
composer install

2.  Konfigurasi .env
app.baseURL = 'http://localhost:8080/'
database.default.database = db_ci4
database.default.username = root
database.default.password =

3. Migrasi & Seeder
```bash
php spark migrate
php spark db:seed DiskonSeeder

4. Jalankan Serve
```bash
php spark serve

Buka di browser: http://localhost:8080

