<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <a href="<?= BASEURL; ?>/doctor/" class="text-gray-500 hover:text-gray-700">Dashboard</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li>
                <a
                    href="<?= BASEURL; ?>/doctor/catatan_rekam_medis"
                    class="text-gray-500 hover:text-gray-700">Catatan Medis</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li class="text-blue-600">Detail Rekam Medis</li>
        </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Patient Info Card -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Informasi Pasien</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">ID Pasien:</span>
                        <span class="font-medium">PAT-001</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Nama:</span>
                        <span class="font-medium">John Doe</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Tanggal Lahir:</span>
                        <span class="font-medium">15 Mei 1990</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Jenis Kelamin:</span>
                        <span class="font-medium">Laki-laki</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">No. Telepon:</span>
                        <span class="font-medium">1234567890</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Alamat:</span>
                        <span class="font-medium">123 Maple Street, Springfield</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-wrap gap-4 mb-6">
        <button
            class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 flex items-center">
            <i class="fas fa-plus mr-2"></i>Tambah Catatan
        </button>
        <button
            class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 flex items-center">
            <i class="fas fa-print mr-2"></i>Cetak Catatan
        </button>
    </div>

    <!-- Medical Records Table -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID Rekam Medis
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Informasi Dokter
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Kunjungan
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Diagnosis
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Pengobatan
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Catatan
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">MR-2024-001</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium">Dr. Sarah Smith</div>
                                <div class="text-gray-500">ID: DOC-001</div>
                                <div class="text-gray-500">Dokter Umum</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">1 Nov 2024</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Hypertension
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <ul class="text-sm text-gray-900 list-disc list-inside">
                                <li>Lifestyle modification</li>
                                <li>Prescription medication</li>
                            </ul>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                Patient advised to monitor blood pressure regularly.
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">MR-2024-002</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium">Dr. Sarah Smith</div>
                                <div class="text-gray-500">ID: DOC-001</div>
                                <div class="text-gray-500">Dokter Umum</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">15 Nov 2024</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Eczema
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <ul class="text-sm text-gray-900 list-disc list-inside">
                                <li>Topical corticosteroid</li>
                                <li>Moisturizer</li>
                            </ul>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                Avoid triggers such as harsh soaps and stress.
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>