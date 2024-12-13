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
                    <?= $data["appointment_count"] ?> janji temu baru membutuhkan konfirmasi
                </p>
            </div>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
        <form id="searchForm" method="POST" action="<?= BASEURL; ?>/doctor/search_appointment_patients" class="mb-2">
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

    <!-- Appointments Table -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
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
                    <?php foreach ($data['appointments'] as $appointment) : ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    <?= $appointment['patient']['name']; ?>
                                </div>
                                <div class="text-sm text-gray-500"><?= $appointment['patient']['_id']; ?></div>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?= date('l, d F Y', strtotime($appointment['appointment_date']->toDateTime()->format('Y-m-d'))); ?></div>
                                <div class="text-sm text-gray-500"><?= $appointment['appointment_time']['start']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?= $appointment['doctor']['name']; ?></div>
                                <div class="text-sm text-gray-500"><?= $appointment['doctor']['specialization']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    <?= $appointment['status']; ?>
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
                                        class="text-red-600 hover:text-red-900"
                                        title="Batalkan">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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