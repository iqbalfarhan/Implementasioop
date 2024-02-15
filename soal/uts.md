# Soal UTS Object Oriented Programming

Buatlah sebuah Class untuk Produk, Laptop, dan Monitor. berikut adalah deskripsi dari kelas-kelas yang akan dibuat:

## Class yang dibuat

### 1. Class Produk
- Memiliki properti nama, harga, dan SKU.
- Memiliki metode __construct, getDetail, getRupiah.
- Memiliki metode abstrak getDetail().
- Metode getRupiah() mengembalikan harga dalam format Rupiah, contoh: dari 13000 menjadi Rp. 13.000.

### 2. Class Laptop
- Merupakan turunan dari kelas Produk.
- Memiliki semua properti dari kelas Produk ditambah merk, ukuran RAM, dan ukuran SSD.

### 3. Class Monitor
- Merupakan turunan dari kelas Produk.
- Memiliki semua properti dari kelas Produk ditambah panel dan resolusi (HD/2K/4K).

## Pembuatan Objek
- Buat objek laptop("Asus ROG", 13000000, "AR12345", "Asus", 8, 256).
- Buat objek monitor("Monitor LG 27 Inch", 13000000, "M12345", "IPS", "2K").
- Tampilkan objek tersebut.

## Penilaian
Penilaian didasarkan pada kemampuan objek untuk ditampilkan dengan benar, kebersihan penulisan kode, dan kreativitas dalam menggunakan komponen dari OOP PHP.
