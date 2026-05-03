# PAWF

Repository ini berisi 3 project CodeIgniter 4:

- `project1`: aplikasi sederhana dengan halaman utama dan kalkulator.
- `project2`: aplikasi halaman profil/portfolio/about dengan kerangka task.
- `project3`: aplikasi blog/post dengan database, migration, seeder, admin CRUD, dan autentikasi Myth/Auth.

## Struktur Folder

```text
pawf/
+-- project1/
+-- project2/
+-- project3/
```

## Prasyarat

Pastikan sudah terpasang:

- PHP sesuai kebutuhan project.
- Composer.
- MySQL/MariaDB jika menjalankan fitur database.
- Ekstensi PHP umum untuk CodeIgniter 4, seperti `intl`, `mbstring`, `json`, `mysqlnd`, dan `curl`.

Versi PHP:

- `project1`: PHP `^8.2`.
- `project2`: PHP `^7.4 || ^8.0`.
- `project3`: PHP `^8.2`.

## Instalasi Umum

Masuk ke folder project yang ingin dijalankan, lalu install dependency Composer.

```bash
cd project1
composer install
```

Contoh untuk project lain:

```bash
cd project2
composer install
```

```bash
cd project3
composer install
```

Jika folder `vendor/` sudah ada, `composer install` tetap aman dijalankan untuk memastikan dependency sesuai `composer.lock`.

## Konfigurasi Environment

Setiap project punya file `.env`. Untuk development lokal, gunakan:

```ini
CI_ENVIRONMENT = development
```

Jika file `.env` belum ada, salin dari file `env`:

```bash
cp env .env
```

Untuk aplikasi yang menggunakan database, sesuaikan bagian database:

```ini
database.default.hostname = localhost
database.default.database = nama_database
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

Catatan: jangan gunakan password database pribadi di repository publik. Sesuaikan `.env` masing-masing komputer.

## Cara Menjalankan

Jalankan server bawaan CodeIgniter dari folder project:

```bash
php spark serve
```

Default URL:

```text
http://localhost:8080
```

Jika port `8080` sedang dipakai:

```bash
php spark serve --port 8081
```

## Project 1

Lokasi:

```bash
cd project1
```

Fitur utama:

- `/`: halaman utama.
- `/kalkulator`: halaman kalkulator.

Install dan jalankan:

```bash
composer install
php spark serve
```

Buka:

```text
http://localhost:8080
http://localhost:8080/kalkulator
```

File penting:

- Controller: `app/Controllers/Home.php`, `app/Controllers/Calculator.php`
- View: `app/Views/welcome_message.php`, `app/Views/calculator_view.php`
- Route: `app/Config/Routes.php`

## Project 2

Lokasi:

```bash
cd project2
```

Fitur utama:

- `/`: halaman utama.
- `/about`: halaman about.
- `/portopolio`: route portfolio yang saat ini tertulis `Portopolio::index`.
- Custom 404 view.
- Kerangka `TaskController` dan `TaskModel`.

Install dan jalankan:

```bash
composer install
php spark serve
```

Buka:

```text
http://localhost:8080
http://localhost:8080/about
http://localhost:8080/portopolio
```

Troubleshooting:

- Jika `/portopolio` error, cek `app/Config/Routes.php`. File controller yang tersedia adalah `app/Controllers/Portfolio.php`, sedangkan route saat ini memanggil `Portopolio::index`.

File penting:

- Controller: `app/Controllers/Home.php`, `app/Controllers/About.php`, `app/Controllers/Portfolio.php`, `app/Controllers/TaskController.php`
- Model: `app/Models/TaskModel.php`
- View: `app/Views/v_about.php`, `app/Views/v_portfolio.php`, `app/Views/layouts/`
- Route: `app/Config/Routes.php`

## Project 3

Lokasi:

```bash
cd project3
```

Fitur utama:

- `/`: halaman utama.
- `/about`: halaman about.
- `/contact`: halaman contact.
- `/faqs`: halaman FAQ.
- `/post`: daftar post.
- `/post/{slug}`: detail post.
- `/admin/post`: halaman admin post, memakai filter login.
- `/admin/post/new`: create post.
- `/admin/post/{id}/edit`: update post.
- `/admin/post/{id}/delete`: delete post.

Dependency tambahan:

- `myth/auth` untuk autentikasi.

Install:

```bash
composer install
```

Setup database:

1. Buat database MySQL, contoh:

```sql
CREATE DATABASE ci4_blog;
```

2. Sesuaikan `.env`:

```ini
CI_ENVIRONMENT = development

database.default.hostname = localhost
database.default.database = ci4_blog
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

3. Jalankan migration:

```bash
php spark migrate
```

4. Jika tabel autentikasi Myth/Auth belum terbentuk, jalankan migration semua namespace:

```bash
php spark migrate --all
```

5. Jalankan seeder post:

```bash
php spark db:seed PostSeeder
```

Jalankan server:

```bash
php spark serve
```

Buka:

```text
http://localhost:8080
http://localhost:8080/post
http://localhost:8080/admin/post
```

Untuk mengakses halaman admin, login terlebih dahulu lewat route auth yang tersedia dari Myth/Auth, biasanya:

```text
http://localhost:8080/login
http://localhost:8080/register
```

File penting:

- Controller public: `app/Controllers/Home.php`, `app/Controllers/Page.php`, `app/Controllers/Post.php`
- Controller admin: `app/Controllers/PostAdmin.php`
- Model: `app/Models/PostModel.php`
- Migration: `app/Database/Migrations/`
- Seeder: `app/Database/Seeds/PostSeeder.php`
- View admin: `app/Views/admin/`
- Auth config: `app/Config/Auth.php`, `app/Config/Filters.php`
- Route: `app/Config/Routes.php`

## Cara Membuat Project CodeIgniter Baru

Dari folder `pawf`, jalankan:

```bash
composer create-project codeigniter4/appstarter nama_project
```

Masuk ke project baru:

```bash
cd nama_project
```

Jalankan server:

```bash
php spark serve
```

## Cara Membuat Controller, Model, Migration, dan Seeder

Jalankan dari folder project CodeIgniter.

Membuat controller:

```bash
php spark make:controller NamaController
```

Membuat model:

```bash
php spark make:model NamaModel
```

Membuat migration:

```bash
php spark make:migration CreateNamaTable
```

Membuat seeder:

```bash
php spark make:seeder NamaSeeder
```

Menjalankan migration:

```bash
php spark migrate
```

Rollback migration terakhir:

```bash
php spark migrate:rollback
```

Menjalankan seeder:

```bash
php spark db:seed NamaSeeder
```

## Cara Menambah Route

Edit file:

```text
app/Config/Routes.php
```

Contoh:

```php
$routes->get('/produk', 'Produk::index');
$routes->add('/produk/new', 'Produk::create');
$routes->add('/produk/(:segment)/edit', 'Produk::edit/$1');
$routes->get('/produk/(:segment)/delete', 'Produk::delete/$1');
```

## Cara Membuat CRUD Sederhana

Alur umum CRUD di CodeIgniter:

1. Buat migration untuk tabel.
2. Jalankan `php spark migrate`.
3. Buat model untuk tabel tersebut.
4. Buat controller untuk list, detail, create, edit, dan delete.
5. Buat view untuk form dan daftar data.
6. Tambahkan route di `app/Config/Routes.php`.

Contoh struktur file:

```text
app/
+-- Controllers/Produk.php
+-- Models/ProdukModel.php
+-- Database/Migrations/xxxx_CreateProdukTable.php
+-- Views/produk/
    +-- index.php
    +-- create.php
    +-- edit.php
```

## Testing

Setiap project memiliki script test Composer:

```bash
composer test
```

Atau langsung:

```bash
vendor/bin/phpunit
```

## Perintah Cepat

Project 1:

```bash
cd project1
composer install
php spark serve
```

Project 2:

```bash
cd project2
composer install
php spark serve
```

Project 3:

```bash
cd project3
composer install
php spark migrate
php spark db:seed PostSeeder
php spark serve
```

