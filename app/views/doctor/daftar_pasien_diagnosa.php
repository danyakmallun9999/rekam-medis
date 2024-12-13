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
                    <!-- Search and Filter Section -->
                    <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                        <form id="searchForm" method="POST" action="<?= BASEURL; ?>/doctor/search_patients" class="mb-2">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                <div class="flex-1">
                                    <div class="relative">
                                        <input
                                            type="text"
                                            name="search"
                                            id="searchInput"
                                            placeholder="Cari pasien..."
                                            value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>"
                                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-4">

                                    <button id="cari" type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                                        <i class="fas fa-search mr-2"></i>Cari
                                    </button>
                                </div>
                            </div>
                        </form>

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
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">
                                                    John Smith
                                                </div>
                                                <div class="text-sm text-gray-500">35 Tahun</div>
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