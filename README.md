# Sistem Rekam Medis Elektronik (SRME)

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
git clone https://github.com/danyakmallun9999/rekam-medis.git
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

### 4. Membuat Database & Koleksi

1. Pastikan MongoDB sudah terinstal dan berjalan pada mesin Anda.
   
2. Akses MongoDB melalui terminal dengan perintah:
   ```bash
    mongo
   ```
3. Buat database baru untuk EMR:
   ```javascript
    use emr_system
   ```
4. Membuat Koleksi users
   ```javascript
    db.createCollection("users");
   ```
5. Membuat Koleksi patients
   ```javascript
    db.createCollection("patients");
   ```
6. Membuat Koleksi patients
   ```javascript
    db.createCollection("doctors");
   ```
7. Membuat Koleksi medical_records
   ```javascript
    db.createCollection("medical_records");
   ```
8. Mengisi Koleksi users
   ```javascript
    db.users.insertMany([
      {
        _id: ObjectId("674a58f8d3de8381c8c1c18c"),
        username: "admin",
        email: "admin@example.com",
        password: "admin123",
        role: "admin",
        created_at: ISODate("2024-11-30T08:00:00.000Z"),
        updated_at: ISODate("2024-11-30T08:30:00.000Z"),
      },
      {
        _id: ObjectId("674a58f8d3de8381c8c1c18d"),
        username: "dr_susan",
        email: "dr_susan@example.com",
        password: "dr_susan123",
        role: "doctor",
        created_at: ISODate("2024-11-30T09:00:00.000Z"),
        updated_at: ISODate("2024-11-30T09:30:00.000Z"),
      },
      {
        _id: ObjectId("674a58f8d3de8381c8c1c18e"),
        username: "receptionist",
        email: "receptionist@example.com",
        password: "receptionist123",
        role: "staff",
        created_at: ISODate("2024-11-30T10:00:00.000Z"),
        updated_at: ISODate("2024-11-30T10:30:00.000Z"),
      },
    ]);
   ```
9. Mengisi Koleksi patients
    ```javascript
    db.patients.insertMany([
        {
          _id: "PAT-004",
          name: "Carlos Ramirez",
          birth_date: ISODate("1982-07-20T00:00:00.000Z"),
          gender: "Male",
          contact_number: "1234509876",
          address: "789 Pine Road, Miami",
        },
        {
          _id: "PAT-005",
          name: "Maria Garcia",
          birth_date: ISODate("1995-02-12T00:00:00.000Z"),
          gender: "Female",
          contact_number: "0987654321",
          address: "321 Birch Street, Los Angeles",
        },
      ]);
    ```
10. Mengisi Koleksi doctors
    ```javascript
    db.doctors.insertMany([
      {
        _id: "DOC-003",
        name: "Dr. Susan Miller",
        specialization: "Orthopedics",
        license_number: "LIC987654",
        contact_number: "1122334455",
        working_schedule: [
          { day: "Monday", time: "10:00-18:00" },
          { day: "Thursday", time: "11:00-19:00" },
        ],
      },
      {
        _id: "DOC-004",
        name: "Dr. James Wilson",
        specialization: "Neurology",
        license_number: "LIC321456",
        contact_number: "2233445566",
        working_schedule: [
          { day: "Tuesday", time: "08:00-16:00" },
          { day: "Friday", time: "09:00-17:00" },
        ],
      },
    ]);
    ```
11. Mengisi Koleksi medical_records
    ```javascript
    db.medical_records.insertMany([
      {
        _id: "MR-2024-004",
        patient_id: "PAT-004",
        doctor_id: "DOC-003",
        visit_date: ISODate("2024-12-01T00:00:00.000Z"),
        diagnosis: "Sprained ankle",
        treatment: ["Rest", "Ice therapy", "Compression bandage"],
        notes: "Patient advised to avoid weight-bearing activities for a week.",
      },
      {
        _id: "MR-2024-005",
        patient_id: "PAT-005",
        doctor_id: "DOC-004",
        visit_date: ISODate("2024-12-02T00:00:00.000Z"),
        diagnosis: "Migraine",
        treatment: ["Pain relievers", "Avoid bright lights"],
        notes: "Patient to follow up in 2 weeks if symptoms persist.",
      },
    ]);
    ```
### 5. Konfigurasi MongoDB

1. Buat database baru di MongoDB
2. Sesuaikan konfigurasi di file `app/config/config.php`:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'emr_system');
define('DB_PORT', '27017');
```
### 6. Konfigurasi TailwindCSS

1. Buat file konfigurasi Tailwind
   bash
   npx tailwindcss init
2. Sesuaikan file `tailwind.config.js`:

```javascript
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/**/*.{php,html,js}", "./public/**/*.{php,html,js}"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

## Struktur Folder

```graphql
emr-system/
├── app/
│   ├── config/
│   │   ├── config.php
│   │   └── database.php
│   │
│   ├── controllers/
│   │   ├── admin.php
│   │   ├── doctor.php
│   │   ├── login.php
│   │   ├── staff.php
│   │   └── unauthorized.php
│   │
│   ├── core/
│   │   ├── app.php
│   │   └── controller.php
│   │
│   ├── models/
│   │   ├── DoctorModel.php
│   │   ├── PatientModel.php
│   │   └── UserModel.php
│   │
│   └── views/
│       ├── admin/
│       │   ├── index.php
│       │   ├── manage_users.php
│       │   ├── reports.php
│       │   └── settings.php
│       │
│       ├── doctor/
│       │   ├── catatan_rekam_medis.php
│       │   ├── daftar_pasien_diagnosa.php
│       │   ├── detail_rekam_medis.php
│       │   ├── diagnosa.php
│       │   └── index.php
│       │
│       ├── login/
│       │   └── index.php
│       │
│       ├── staff/
│       │   ├── daftar_pasien.php
│       │   ├── index.php
│       │   └── janji_temu.php
│       │
│       ├── templates/
│       │   ├── adminFooter.php
│       │   ├── adminHeader.php
│       │   ├── adminNav.php
│       │   ├── adminSidebar.php
│       │   ├── footer.php
│       │   ├── header.php
│       │   └── nav.php
│       │
│       └── unauthorized/
│           └── index.php
│
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   ├── .htaccess
│   └── index.php
│
├── vendor/
├── node_modules/
├── .gitignore
├── composer.json
├── package.json
└── README.md
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
