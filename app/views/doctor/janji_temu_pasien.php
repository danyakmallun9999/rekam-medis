<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <a href="<?= BASEURL; ?>/doctor/" class="text-gray-500 hover:text-gray-700">Dashboard</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li class="text-blue-600">Janji Temu</li>
        </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Notifications Panel -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
        <div class="flex">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-400"></i>
            </div>
            <div class="ml-3">
                <p class="text-sm text-yellow-700">
                    5 janji temu baru membutuhkan konfirmasi
                </p>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="flex flex-wrap gap-4 mb-6">
        <button
            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 flex items-center">
            <i class="fas fa-plus mr-2"></i>
            Janji Temu Baru
        </button>
        <button
            class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 flex items-center">
            <i class="fas fa-calendar-day mr-2"></i>
            Janji Temu Hari Ini
        </button>
    </div>

    <!-- Calendar and List View Toggle -->
    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
        <div
            class="flex flex-col md:flex-row gap-4 justify-between items-center">
            <div class="flex space-x-2">
                <button
                    class="bg-blue-100 text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-200">
                    <i class="fas fa-calendar-alt mr-2"></i>Kalender
                </button>
                <button
                    class="bg-gray-100 text-gray-600 px-4 py-2 rounded-lg hover:bg-gray-200">
                    <i class="fas fa-list mr-2"></i>Daftar
                </button>
            </div>

            <!-- Search and Filters -->
            <div class="flex flex-wrap gap-2">
                <input
                    type="text"
                    placeholder="Cari janji temu..."
                    class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" />
                <select
                    class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    <option>Semua Dokter</option>
                    <option>Dr. John Doe</option>
                    <option>Dr. Jane Smith</option>
                </select>
                <select
                    class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    <option>Semua Status</option>
                    <option>Dikonfirmasi</option>
                    <option>Menunggu</option>
                    <option>Selesai</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Calendar View -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <div class="grid grid-cols-7 gap-2">
            <!-- Calendar Header -->
            <div class="text-center font-semibold text-gray-600">Min</div>
            <div class="text-center font-semibold text-gray-600">Sen</div>
            <div class="text-center font-semibold text-gray-600">Sel</div>
            <div class="text-center font-semibold text-gray-600">Rab</div>
            <div class="text-center font-semibold text-gray-600">Kam</div>
            <div class="text-center font-semibold text-gray-600">Jum</div>
            <div class="text-center font-semibold text-gray-600">Sab</div>

            <!-- Calendar Days -->
            <!-- Example of a day with appointments -->
            <div
                class="border rounded-lg p-2 min-h-[100px] hover:bg-gray-50 cursor-pointer">
                <div class="text-right text-gray-500">1</div>
                <div class="mt-1">
                    <div class="text-xs bg-blue-100 text-blue-600 rounded p-1 mb-1">
                        09:00 - John D.
                    </div>
                    <div class="text-xs bg-green-100 text-green-600 rounded p-1">
                        14:30 - Mary S.
                    </div>
                </div>
            </div>
            <!-- More calendar days... -->
        </div>
    </div>

    <!-- Appointments Table -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            No. Janji
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Pasien
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Jadwal
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Dokter
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Status
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">
                                JT-2024-001
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img
                                        class="h-10 w-10 rounded-full"
                                        src="https://via.placeholder.com/40"
                                        alt="" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        John Smith
                                    </div>
                                    <div class="text-sm text-gray-500">Pemeriksaan Rutin</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">20 Mar 2024</div>
                            <div class="text-sm text-gray-500">09:00 WIB</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Dr. Sarah Smith</div>
                            <div class="text-sm text-gray-500">Dokter Umum</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Menunggu Konfirmasi
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button
                                    class="text-blue-600 hover:text-blue-900"
                                    title="Konfirmasi">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button
                                    class="text-yellow-600 hover:text-yellow-900"
                                    title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button
                                    class="text-red-600 hover:text-red-900"
                                    title="Batalkan">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Appointment Details -->
<div
    class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"
    id="appointmentModal">
    <div
        class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Detail Janji Temu</h3>
            <button class="text-gray-400 hover:text-gray-500">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <!-- Modal content -->
    </div>
</div>

<script>
    // Add your JavaScript for calendar interactions and modal handling here
</script>