<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## Learning Laravel

- php artisan serve
- Membuat 2 folder (layout dan post)
- Konfigurasi routing di routes/web
- Menambahkan taildwind konfigurasi taildwind di webpack (laravel mix) dan tambahkan tailwind base dan component di resource/app.css
- Jalankan yarn dev untuk mengenerate tailwindcss

- Buat nama table di MySql dan samakan dengan file di env

- cmd: php artisan migrate (untuk mengkoneksi ke db)
- cmd: php artisan make:migration add_username_to_users_table (menambahkan query di tabel users)
- tambahkan username up dan down di migration 2020
- php artisan migrate

- LANJUTAN
- cmd: php artisan make:migration nama_migrasi (untuk membuat tabel)
- cmd: php artisan migrate:rollback(untuk menghapus tabel terakhir dibuat)
- cmd: php artisan migrate:reset (mengahapus semua tabel di mysql)

- cmd: php artisan make:controller Auth\\RegisterController OR php artisan make:controller DashboardController (Membuat Controller)
- cmd: php artisan make:model TestModel (Membuat Model)
- Merapihkan navigasi auth dan guest register di app.blade.php

- Membuat Login
- php artisan make:controller Auth\\LoginController
- tambahkan route login di web.php
- configurasi Logincontroller
- tambahkan viewlogin

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
