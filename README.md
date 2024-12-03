# Sistem Rekam Medis Elektronik (E-MR)

## Deskripsi Proyek
Sistem Rekam Medis Elektronik adalah aplikasi berbasis web yang dirancang untuk membantu fasilitas kesehatan dalam mengelola data medis pasien secara digital. Aplikasi ini dibangun menggunakan PHP dengan arsitektur MVC, MongoDB sebagai database, dan TailwindCSS untuk styling.

## Fitur Utama
- 🔐 Sistem Autentikasi Multi-Role (Admin, Dokter, Staff)
- 👥 Manajemen Data Pasien
- 📋 Pencatatan Rekam Medis Digital
- 🗓️ Sistem Janji Temu
- 📊 Dashboard Analytics
- 🏥 Manajemen Data Dokter dan Staff
- 🔍 Pencarian dan Filter Data
- 🖨️ Cetak Laporan

## Prasyarat
- PHP >= 7.4
- MongoDB >= 4.4
- Composer
- Node.js & NPM
- Web Server (Apache/Nginx)

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/emr-system.git
cd emr-system
```

### 2. Install Dependencies PHP

```bash
composer install
```

### 3. Install Dependencies Node.js

```bash
npm install
```

### 4. Konfigurasi MongoDB
1. Buat database baru di MongoDB
2. Sesuaikan konfigurasi di file `app/config/config.php`

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'emr_system');
define('DB_PORT', '27017');
```

### 5. Konfigurasi TailwindCSS
1. Buat file konfigurasi Tailwind
bash
npx tailwindcss init
2. Sesuaikan file `tailwind.config.js`:
   
```javascript
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/**/*.{php,html,js}",
    "./public/**/*.{php,html,js}"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

## Struktur Folder
```graphql
emr-system/
├── app/
│ ├── controllers/
│ ├── models/
│ ├── views/
│ └── config/
├── public/
│ ├── css/
│ ├── js/
│ └── index.php
├── vendor/
└── node_modules/
```

## Penggunaan

### Login
- Admin: admin / admin
- Dokter: haryono / haryono
- Staff: staff / staff

### Akses Dashboard
Setiap role memiliki dashboard khusus dengan fitur yang berbeda:
- Admin: Manajemen pengguna dan konfigurasi sistem
- Dokter: Rekam medis dan janji temu pasien
- Staff: Pendaftaran pasien dan manajemen janji temu