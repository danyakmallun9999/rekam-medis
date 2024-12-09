<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <a href="#" class="text-gray-500 hover:text-gray-700">Dashboard Staff</a>
            </li>
        </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Pasien Hari Ini -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-user-injured text-blue-500 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-sm font-medium text-gray-600">Pasien Hari Ini</h2>
                    <p class="text-2xl font-semibold text-gray-900"><?= $data["appointment_count"]; ?></p>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-green-500 text-sm font-medium">
                    <i class="fas fa-arrow-up mr-1"></i>+5
                </span>
                <span class="text-gray-500 text-sm ml-2">dari kemarin</span>
            </div>
        </div>

        <!-- Total Pasien -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-users text-green-500 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-sm font-medium text-gray-600">Total Pasien</h2>
                    <p class="text-2xl font-semibold text-gray-900"><?= $data["patient_count"]; ?></p>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-green-500 text-sm font-medium">
                    <i class="fas fa-arrow-up mr-1"></i>+12%
                </span>
                <span class="text-gray-500 text-sm ml-2">bulan ini</span>
            </div>
        </div>

        <!-- Janji Temu -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-full">
                    <i class="fas fa-calendar-check text-purple-500 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h2 class="text-sm font-medium text-gray-600">
                        Janji Temu Aktif
                    </h2>
                    <p class="text-2xl font-semibold text-gray-900">28</p>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-yellow-500 text-sm font-medium">
                    <i class="fas fa-clock mr-1"></i>8 menunggu konfirmasi
                </span>
            </div>
        </div>
    </div>

    <!-- Main Navigation Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Daftar Pasien Card -->
        <a
            href="<?= BASEURL; ?>/staff/daftar_pasien"
            class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
            <div class="flex flex-col items-center text-center">
                <div class="p-4 bg-green-100 rounded-full mb-4">
                    <i class="fas fa-users text-green-500 text-4xl"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Daftar Pasien</h2>
                <p class="text-gray-600 mb-4">
                    Akses dan kelola data seluruh pasien yang terdaftar
                </p>
                <span class="text-green-500 inline-flex items-center">
                    Buka Halaman
                    <i class="fas fa-arrow-right ml-2"></i>
                </span>
            </div>
        </a>
        <!-- Janji Temu Card -->
        <a
            href="<?= BASEURL; ?>/staff/janji_temu"
            class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
            <div class="flex flex-col items-center text-center">
                <div class="p-4 bg-purple-100 rounded-full mb-4">
                    <i class="fas fa-calendar-check text-purple-500 text-4xl"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Janji Temu</h2>
                <p class="text-gray-600 mb-4">
                    Atur dan kelola jadwal janji temu pasien
                </p>
                <span class="text-purple-500 inline-flex items-center">
                    Buka Halaman
                    <i class="fas fa-arrow-right ml-2"></i>
                </span>
            </div>
        </a>

    </div>
</div>