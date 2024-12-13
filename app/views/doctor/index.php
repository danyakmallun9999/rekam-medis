<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <a href="#" class="text-gray-500 hover:text-gray-700">Dashboard Dokter</a>
            </li>
        </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-users text-blue-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Total Pasien</h3>
                    <p class="text-2xl font-semibold"><?= $data["patient_count"]; ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-calendar-check text-green-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Janji Temu Hari Ini</h3>
                    <p class="text-2xl font-semibold"><?= $data["appointment_count"]; ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <i class="fas fa-stethoscope text-yellow-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Diagnosa Pending</h3>
                    <p class="text-2xl font-semibold">5</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-full">
                    <i class="fas fa-notes-medical text-purple-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Catatan Medis Baru</h3>
                    <p class="text-2xl font-semibold">8</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Janji Temu Card -->
        <div
            class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
            <div class="flex flex-col items-center text-center h-full">
                <div class="p-4 bg-green-100 rounded-full mb-4">
                    <i class="fas fa-calendar-alt text-green-500 text-4xl"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Janji Temu</h2>
                <p class="text-gray-600 mb-4">Atur jadwal konsultasi pasien</p>
                <a
                    href="<?= BASEURL; ?>/doctor/janji_temu_pasien"
                    class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 inline-flex items-center mt-auto">
                    <span>Lihat Selengkapnya</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>

        <!-- Daftar Pasien Card -->
        <!-- <div
            class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
            <div class="flex flex-col items-center text-center h-full">
                <div class="p-4 bg-blue-100 rounded-full mb-4">
                    <i class="fas fa-users text-blue-500 text-4xl"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Daftar Pasien</h2>
                <p class="text-gray-600 mb-4">
                    Kelola data dan informasi pasien Anda
                </p>
                <a
                    href="<?= BASEURL; ?>/doctor/daftar_pasien_diagnosa"
                    class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 inline-flex items-center mt-auto">
                    <span>Lihat Selengkapnya</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div> -->

        <!-- Catatan Medis Card -->
        <div
            class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
            <div class="flex flex-col items-center text-center h-full">
                <div class="p-4 bg-purple-100 rounded-full mb-4">
                    <i class="fas fa-notes-medical text-purple-500 text-4xl"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Catatan Medis</h2>
                <p class="text-gray-600 mb-4">Akses riwayat medis pasien</p>
                <a
                    href="<?= BASEURL; ?>/doctor/catatan_rekam_medis"
                    class="bg-purple-500 text-white px-6 py-2 rounded-lg hover:bg-purple-600 inline-flex items-center mt-auto">
                    <span>Lihat Selengkapnya</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>