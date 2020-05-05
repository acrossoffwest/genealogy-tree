![Laravel](https://laravel.com/assets/img/components/logo-laravel.svg)

<h1 align="center">Aplikasi Silsilah Keluarga</h1>

[![Build Status](https://travis-ci.org/nafiesl/silsilah.svg?branch=master)](https://travis-ci.org/nafiesl/silsilah)
[![Coverage Status](https://coveralls.io/repos/github/nafiesl/silsilah/badge.svg?branch=master)](https://coveralls.io/github/nafiesl/silsilah?branch=master)

> **Development in progress**  
> Dalam proses development, perubahan struktur tabel akan **diubah langsung pada file migration** yang sesuai.

## Tentang
Aplikasi silsilah keluarga untuk mempermudah pendataan keluarga kita.

## Pemanfaatan
1. Melihat Silsilah keluarga
2. Melihat data ahli waris

## Fitur
Aplikasi ini menggunakan Bahasa Indonesia dan Bahasa Inggris, diatur pada `config.locale`.

### Konsep
1. Satu orang memiliki satu ayah (belum sebagai tentu orang tua)
2. Satu orang memiliki satu ibu (belum sebagai tentu orang tua)
3. satu orang memiliki satu orang tua
4. Satu orang memiliki 0 s/d beberapa anak
5. Satu orang bisa memiliki pasangan (Istri/Suami)
6. Satu pasangan bisa memiliki 0 s/d beberapa anak
7. Satu orang laki-laki bisa memiliki maksimal 4 pasangan yang tidak cerai (TODO)
8. Satu orang perempuan bisa memiliki maksimal 1 pasangan yang tidak cerai (TODO)
9. Satu orang perempuan yang suaminya meninggal otomatis set tanggal cerai (pada data pasangan) (TODO)

### Input ke sistem
1. Input Nama dan Jenis Kelamin
2. Tambah Ayah
3. Tambah Ibu
4. Tambah Pasangan
5. Tambah Anak

### Data Orang
1. Nama Panggilan
2. Jenis Kelamin
3. Nama Lengkap
4. Tanggal Lahir
5. Tanggal Meninggal (atau cukup tahun)
6. Alamat
7. Telp
8. Email

### Data Pasangan (TODO)
1. Suami
2. Istri
3. Tanggal menikah
4. Tanggal Cerai
5. Alamat

## Cara Install

### Kebutuhan Server

Aplikasi ini dapat dipasang pada server lokal dan onlne dengan spesifikasi berikut:

1. PHP 7.2 (dan mengikuti [server requirements Laravel 5.8](https://laravel.com/docs/5.8#server-requirements) lainnya),
2. Database MySQL atau MariaDB,
3. SQlite (untuk automated testing).

### Langkah Instalasi

1. Clone Repo, pada terminal : `git clone https://github.com/nafiesl/silsilah.git`
2. `cd silsilah`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Buat **database pada mysql** untuk aplikasi ini
7. **Setting database** pada file `.env`
8. `php artisan migrate`
9. `php artisan storage:link`
10. `php artisan serve`
11. Selesai (Register user baru untuk mulai mengisi silsilah).

## Testing
Ingin mencoba automated testingnya? Silakan ketik perintah pada terminal: `vendor/bin/phpunit`

## Screenshots

#### Pohon Keluarga
![Pohon Keluarga](public/images/02-pohon-keluarga.jpg "Pohon Keluarga")

#### Bagan Keluarga
![Bagan Keluarga](public/images/03-bagan-keluarga.jpg "Bagan Keluarga")

#### Cari Keluarga
![Cari Keluarga](public/images/01-cari-keluarga.jpg "Cari Keluarga")

#### Profil
![Profil](public/images/04-profil.jpg "Profil")

#### Form Profil
![Form Profil](public/images/05-form-profil.jpg "Form Profil")

#### Edit Profil
![Edit Profil](public/images/06-edit-profil.jpg "Edit Profil")

#### Automated Testing
```bash
$ vendor/bin/phpunit
```
![Automated Testing](public/images/07-automated-testing.jpg "Automated Testing")

## License

Project Silsilah merupakan software open-source di bawah lisensi [Lisensi MIT](LICENSE).
