# 🥩 MeatStore — Web Penjualan Daging (Laravel + Livewire)

## 📌 Deskripsi Singkat
**MeatStore** adalah aplikasi web penjualan daging berbasis **Laravel** dan **Livewire** yang dirancang untuk memudahkan pelanggan dalam memilih, memesan, dan melihat detail produk daging secara cepat dan praktis.  
Aplikasi ini menyediakan katalog produk lengkap, keranjang belanja, checkout, tips penyimpanan daging, jam operasional, hingga lokasi toko melalui Google Maps.

---

## ⭐ Fitur Utama

### 1. Kontak Kami / Formulir Pesan
- Form sederhana berisi: **nama, email, pesan**.  
- Pesan bisa dikirim ke email admin atau disimpan di database.

### 2. Daftar Produk Daging
- Filter berdasarkan:
  - **Jenis:** sapi, ayam  
  - **Potongan:** steak, giling, dll  
- Menampilkan foto produk, nama, dan harga.

### 3. Detail Produk
- Informasi lengkap potongan daging.  
- Saran cara memasak.  
- Harga per kg/gram.

### 4. Keranjang Belanja
- Pelanggan dapat memilih produk dengan **berat sesuai kebutuhan**.  
- Total harga dihitung otomatis.

### 5. Checkout & Konfirmasi Pembayaran
- Form data pengiriman.  
- Unggah bukti transaksi/transfer.  
- Data pesanan tersimpan di database.

### 6. Riwayat Pesanan (User)
- Pelanggan bisa melihat status pesanan:  
  - **Diproses, Dikemas, Dikirim, Selesai**

### 7. Lokasi Toko & Google Maps
- Menampilkan iframe Maps di footer atau halaman “Kontak Kami”.

### 8. Tips Menyimpan Daging
- Edukasi pelanggan agar daging tetap awet dan tidak mudah rusak.

### 9. Jam Operasional & Status Toko (Open/Close)
- Menampilkan jam buka dan tutup.  
- Status toko berubah otomatis sesuai waktu.

### 10. Resep Sederhana
- Rekomendasi resep sesuai jenis potongan daging.

---

## 🛠️ Teknologi Yang Digunakan

- **Laravel 10+**  
- **Laravel Livewire**  
- **Blade Template**  
- **TailwindCSS**  
- **MySQL / MariaDB**  
- **PHP 8.1+**  
- **Composer**  
- **Google Maps Embed API**

---

## 📥 Cara Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/namaproject.git
```
```bash
cd namaproject
```
2. Install Dependency
```bash
composer install
npm install
npm run build
```
3. Copy File .env
```bash
cp .env.example .env
```
5. Generate App Key
```bash
php artisan key:generate
```
7. Konfigurasi Database di .env
```bash
DB_DATABASE=namadb
DB_USERNAME=root
DB_PASSWORD=
```
9. Migrasi Database
```bash
php artisan migrate
```
10. (Opsional) Jalankan Seeder
```bash
php artisan db:seed
```
▶️ Cara Menjalankan Project
Jalankan Server Laravel
```bash
php artisan serve
```
Jalankan Vite (jika masih pakai asset dev)
```bash
npm run dev
```
Akses Aplikasi
```bash
http://localhost:8000
```
