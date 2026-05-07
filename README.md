# Landing Page Profil Sekolah

Landing page profil sekolah berbasis PHP murni tanpa database. Semua data sekolah disimpan dalam file konfigurasi PHP statis.

## Fitur

- **Hero Section** — Nama sekolah, logo, tagline, dan tombol kontak
- **Profil Sekolah** — Sejarah, visi, misi, dan akreditasi
- **Fasilitas** — Grid fasilitas dengan ikon dan deskripsi
- **Program Unggulan** — Kartu program/jurusan dengan gambar
- **Galeri Foto** — Grid foto dengan lightbox saat diklik
- **Tenaga Pengajar** — Kartu guru dengan foto, nama, dan mata pelajaran
- **Prestasi** — Daftar penghargaan dengan badge level
- **Formulir Kontak** — Form dengan validasi + pengiriman email
- **Responsif** — Mendukung mobile, tablet, dan desktop
- **Navigasi** — Sticky navbar, smooth scroll, hamburger menu di HP

## Teknologi

- PHP (tanpa framework)
- CSS murni (mobile-first, CSS Grid, Flexbox)
- JavaScript vanilla (tanpa library)

## Cara Menjalankan

### Opsi 1 — PHP Built-in Server (paling cepat)

```bash
php -S localhost:8000
```

Buka browser ke `http://localhost:8000`

### Opsi 2 — XAMPP

1. Salin folder project ke `C:\xampp\htdocs\nama-folder\`
2. Jalankan Apache dari XAMPP Control Panel
3. Buka `http://localhost/nama-folder/`

### Opsi 3 — Laragon

1. Salin folder project ke `C:\laragon\www\nama-folder\`
2. Klik **Start All** di Laragon
3. Buka `http://localhost/nama-folder/`

## Struktur Folder

```
├── index.php                        # Entry point utama
├── contact.php                      # Handler formulir kontak
├── config/
│   └── school_data.php              # Data sekolah (edit di sini)
├── src/
│   └── contact_functions.php        # Fungsi validasi & sanitasi
├── includes/
│   ├── header.php
│   ├── nav.php
│   ├── footer.php
│   └── sections/
│       ├── hero.php
│       ├── profile.php
│       ├── facilities.php
│       ├── programs.php
│       ├── gallery.php
│       ├── teachers.php
│       ├── achievements.php
│       └── contact.php
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── images/
│       ├── logo.png                 # Logo sekolah
│       ├── hero.jpg                 # Foto hero background
│       ├── teachers/                # Foto guru
│       └── gallery/                 # Foto galeri
└── tests/
    └── Unit/
        └── ContactFormTest.php
```

## Cara Mengubah Konten

Semua konten dikelola dari satu file: **`config/school_data.php`**

### Mengubah identitas sekolah

```php
'name'    => 'Nama Sekolah Anda',
'tagline' => 'Tagline sekolah',
'email'   => 'email@sekolah.sch.id',
'phone'   => '(021) 000-0000',
'address' => 'Alamat lengkap sekolah',
```

### Menambah/mengubah guru

```php
'teachers' => [
    [
        'name'    => 'Nama Guru, S.Pd.',
        'subject' => 'Guru Matematika',
        'photo'   => 'assets/images/teachers/nama-file.jpg',
    ],
    // tambah guru lainnya...
],
```

Taruh foto guru di folder `assets/images/teachers/`. Jika foto belum ada, otomatis tampil foto placeholder.

### Menambah fasilitas

```php
'facilities' => [
    [
        'name'        => 'Nama Fasilitas',
        'icon'        => '🏫',
        'description' => 'Deskripsi fasilitas.',
    ],
],
```

### Menambah foto galeri

```php
'gallery' => [
    [
        'path' => 'assets/images/gallery/nama-foto.jpg',
        'alt'  => 'Deskripsi foto untuk aksesibilitas',
    ],
],
```

### Menambah prestasi

```php
'achievements' => [
    [
        'name'  => 'Nama Penghargaan',
        'year'  => 2024,
        'level' => 'Nasional', // Lokal | Nasional | Internasional
    ],
],
```

## Formulir Kontak

Formulir kontak menggunakan fungsi `mail()` PHP bawaan. Pastikan server PHP sudah dikonfigurasi untuk mengirim email (SMTP).

Untuk testing lokal, email tidak akan terkirim tapi halaman tetap berfungsi normal.

## Menjalankan Tests

```bash
composer install
./vendor/bin/phpunit
```

## Lisensi

Bebas digunakan dan dimodifikasi untuk keperluan sekolah.
