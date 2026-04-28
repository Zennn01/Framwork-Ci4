# UNews - Portal Berita (CodeIgniter 4)

Project ini adalah aplikasi portal berita berbasis **CodeIgniter 4** dengan fitur:
- halaman publik (home, about, contact, faq)
- daftar berita dan detail berita berdasarkan slug
- panel admin untuk CRUD post
- autentikasi menggunakan **Myth/Auth**

Repository: `git@github.com:Zennn01/Framwork-Ci4.git`

---

## 1) Tech Stack

- PHP `^8.2`
- CodeIgniter4 Framework `^4.7`
- Myth/Auth `^1.2`
- MySQL/MariaDB (driver default: `MySQLi`)

Dependensi utama ada di `composer.json`.

---

## 2) Fitur yang Sudah Ada

### Halaman Publik
- `/` → Home
- `/about` → About
- `/contact` → Contact
- `/faqs` → FAQ
- `/post` → Daftar berita (hanya status `published`)
- `/post/{slug}` → Detail berita

### Admin Post (Wajib Login)
Route admin diproteksi filter `login`:
- `/admin/post` → List semua post
- `/admin/post/new` → Buat post baru
- `/admin/post/{id}/preview` → Preview post
- `/admin/post/{id}/edit` → Edit post
- `/admin/post/{id}/delete` → Hapus post

### Autentikasi
- Login/Logout menggunakan Myth/Auth (`/login`, `/logout`, dll)
- Aktivasi email dinonaktifkan (`app/Config/Auth.php`)

---

## 3) Struktur Database

Tabel utama: `posts`

Kolom penting:
- `id` (primary key)
- `title`
- `author` (default: `John Doe`)
- `content`
- `status` (`published` / `draft`)
- `slug` (unique)
- `created_at`

Migration:
- `CreatePostsTable`
- `AlterPostsTable` (tambah kolom `slug`)

Seeder:
- `PostSeeder` (data awal contoh post)

---

## 4) Cara Menjalankan Project (Existing Repository)

### A. Clone & Install
```bash
git clone git@github.com:Zennn01/Framwork-Ci4.git
cd Framwork-Ci4
composer install
```

### B. Konfigurasi Environment
Copy file env:
```bash
cp env .env
```

Lalu ubah minimal bagian ini di `.env`:
```dotenv
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = nama_database
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### C. Buat Database & Jalankan Migration
Buat database di MySQL (misal: `unews_db`), lalu:
```bash
php spark migrate
```

Jika ingin isi data contoh:
```bash
php spark db:seed PostSeeder
```

### D. Jalankan Server
```bash
php spark serve
```

Buka di browser:
`http://localhost:8080`

---

## 5) Akun Login

Karena pakai Myth/Auth:
- register via `/register` (jika route aktif)
- login via `/login`

Setelah login, akses admin di:
`/admin/post`

---

## 6) Cara Membuat Project Ini dari Nol

Bagian ini untuk recreate project dari awal.

### 1. Inisialisasi CI4
```bash
composer create-project codeigniter4/appstarter unews
cd unews
```

### 2. Install Auth
```bash
composer require myth/auth
```

### 3. Konfigurasi Auth & Validation
- Tambahkan rules Myth/Auth di `app/Config/Validation.php`
- Set `requireActivation = null` di `app/Config/Auth.php`
- Tambahkan alias filter (`login`, `role`, `permission`) di `app/Config/Filters.php`

### 4. Buat Model, Controller, View
- Model: `PostModel` (`table: posts`)
- Controller:
  - `Home`
  - `Page`
  - `Post` (public list + detail)
  - `PostAdmin` (CRUD admin)
- View:
  - public pages (`home`, `about`, `contact`, `faqs`, `post`, `post_detail`)
  - admin pages (`admin_post_list`, `admin_post_create`, `admin_post_update`)

### 5. Buat Migration & Seeder
- Migration `CreatePostsTable`
- Migration `AlterPostsTable` (slug)
- Seeder `PostSeeder`

Jalankan:
```bash
php spark migrate
php spark db:seed PostSeeder
```

### 6. Atur Route
Tambahkan route publik dan admin di `app/Config/Routes.php`, lalu proteksi route admin dengan filter login.

### 7. Jalankan Aplikasi
```bash
php spark serve
```

---

## 7) Command Penting

```bash
# jalankan local server
php spark serve

# migration
php spark migrate

# rollback migration
php spark migrate:rollback

# seed data
php spark db:seed PostSeeder

# test (jika ada)
composer test
```

---

## 8) Catatan

- Pastikan `baseURL` sesuai port lokal.
- Folder web root untuk deploy adalah `public/`.
- Jika menu admin tidak bisa diakses, pastikan sudah login.
