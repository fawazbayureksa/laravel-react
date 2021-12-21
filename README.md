<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## STEP

- Proses instalasi dan konfigurasi JWT atau JASON WE;jk9'[8g].k[./B TOKEN di dalam project Laravel

JWT Merupakan perangkat lunak yang digunakan untuk membuat API Token berbentuk JSON yang sudah di enksipsi dengan sebuah algoritma , Token yang di generate akan digunakan untuk bertukar informasi antar aplikasi dengan aman 

-Instalasi

```
composer require -w tymon/jwt-auth --ignore-platform-reqs
```

Kemudian melakukan publish konfigurasi 

```
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```
Membuat secret key JWT

```
php artisan jwt:secret
```

Setelah dijalankan di file .env akan ditambahkan hasil seperti 

``JWT_SECRET=key_jwt``

Selanjutnya Konfigurasi config/auth 'Guard'

dan App/models/user.php

- Buat Register Controller

```
php artisan make:controller Api/RegisterController -i
```

- Buat Login Controller

```
php artisan make:controller Api/LoginController
```