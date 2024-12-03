<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <a href="<?= BASEURL; ?>/doctor/" class="text-gray-500 hover:text-gray-700">Dashboard</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li>
                <a href="<?= BASEURL; ?>/doctor/daftar_pasien_diagnosa" class="hover:text-gray-700 text-blue-600"">Daftar Pasien</a>
          </li>
        </ol>
      </nav>
    </div>

    <!-- Main Content -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <div class="flex flex-wrap gap-4 mb-6">
                        <button
                            class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 flex items-center">
                            <i class="fas fa-calendar-check mr-2"></i>
                            Jadwal Hari Ini
                        </button>
                    </div>

                    <!-- Search and Filter Section -->
                    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
                        <div
                            class="flex flex-col md:flex-row gap-4 justify-between items-center">
                            <!-- Search Bar -->
                            <div class="relative w-full md:w-96">
                                <input
                                    type="text"
                                    placeholder="Cari pasien..."
                                    class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                                <div class="absolute left-3 top-2.5 text-gray-400">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>

                            <!-- Filters -->
                            <div class="flex flex-wrap gap-2 w-full md:w-auto">
                                <select
                                    class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                                    <option value="">Semua Status</option>
                                    <option>Hadir</option>
                                    <option>Belum Hadir</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Patients Table -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No. RM
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pasien
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Dokter PJ
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Jadwal
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Priority Patient -->
                                    <tr class="hover:bg-gray-50 bg-yellow-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                RM-2024-001
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
                                                    <div class="text-sm text-gray-500">35 Tahun</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Dr. Sarah Smith</div>
                                            <div class="text-sm text-gray-500">Dokter Umum</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">09:00 WIB</div>
                                            <div class="text-sm text-gray-500">20 Mar 2024</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Hadir
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="<?= BASEURL; ?>/doctor/diagnosa">
                                                <button
                                                    class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">
                                                    Diagnosa
                                                </button>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Regular Patient -->
                                    <tr class="hover:bg-gray-50">
                                        <!-- Similar structure as above but without bg-yellow-50 -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex-1 flex justify-between sm:hidden">
                                    <button
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        Previous
                                    </button>
                                    <button
                                        class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        Next
                                    </button>
                                </div>
                                <div
                                    class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700">
                                            Showing
                                            <span class="font-medium">1</span>
                                            to
                                            <span class="font-medium">10</span>
                                            of
                                            <span class="font-medium">97</span>
                                            results
                                        </p>
                                    </div>
                                    <div>
                                        <nav
                                            class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                            aria-label="Pagination">
                                            <!-- Pagination buttons -->
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

<script>
    // Add your JavaScript for notifications and interactions here
</script>