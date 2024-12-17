<!-- Main Content -->
<div class="ps-4 pe-4 pb-4 sm:ml-64" id="mainContent">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-users text-blue-500"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Total Pengguna</h3>
                    <p class="text-2xl font-semibold">2,453</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-user-md text-green-500"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Total Dokter</h3>
                    <p class="text-2xl font-semibold">125</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <i class="fas fa-user-injured text-yellow-500"></i>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-500 text-sm">Pasien Aktif</h3>
                    <p class="text-2xl font-semibold">1,789</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Medical Records Table -->
    <div class="bg-white rounded-lg shadow-sm mb-6 overflow-hidden">
        <div class="p-4 border-b border-gray-200 flex justify-between items-center">
            <h2 class="text-lg font-semibold">Rekam Medis Terbaru</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Pasien</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dokter</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">1</td>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">2024-12-01</td>
                        <td class="px-6 py-4 whitespace-nowrap">Dr. Smith</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2</td>
                        <td class="px-6 py-4 whitespace-nowrap">Jane Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">2024-12-02</td>
                        <td class="px-6 py-4 whitespace-nowrap">Dr. Johnson</td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- Analytics and Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Analytics Chart -->
        <!-- <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-sm">
          <h2 class="text-lg font-semibold mb-4">Analitik Pengguna</h2>
          <canvas id="userChart" height="200"></canvas>
        </div> -->
        <!-- Recent Activity -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h2 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h2>
            <div class="space-y-4 max-h-[400px] overflow-y-auto">
                <div class="flex items-start">
                    <div class="p-2 bg-blue-100 rounded-full">
                        <i class="fas fa-user-plus text-blue-500"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm">Pengguna baru terdaftar</p>
                        <p class="text-xs text-gray-500">2 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="p-2 bg-yellow-100 rounded-full">
                        <i class="fas fa-edit text-yellow-500"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm">Pembaruan peran pengguna</p>
                        <p class="text-xs text-gray-500">15 menit yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>