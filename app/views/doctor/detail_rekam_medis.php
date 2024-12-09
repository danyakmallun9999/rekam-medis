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
                        <span class="font-medium"><?= $data['patient']['_id']; ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Nama:</span>
                        <span class="font-medium"><?= $data['patient']['name']; ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Tanggal Lahir:</span>
                        <span class="font-medium"><?= $data['patient']['birth_date']->toDateTime()->format('d-m-Y'); ?></span>
                    </div>
                </div>
            </div>
            <div>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Jenis Kelamin:</span>
                        <span class="font-medium"><?= $data['patient']['gender']; ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">No. Telepon:</span>
                        <span class="font-medium"><?= $data['patient']['contact_number']; ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Alamat:</span>
                        <span class="font-medium"><?= $data['patient']['address']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <!-- Action Buttons -->
    <div class="flex flex-wrap gap-4 mb-6 no-print">
        <button onclick="window.print()"
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
                    <?php foreach ($data['medical_records'] as $medical_record) : ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900"><?= $medical_record['_id']; ?></div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <div class="font-medium"><?= $medical_record['doctor']['name']; ?></div>
                                    <div class="text-gray-500">ID: <?= $medical_record['doctor']['_id']; ?></div>
                                    <div class="text-gray-500"><?= $medical_record['doctor']['specialization']; ?></div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php
                                // Mengambil UTCDateTime dari MongoDB
                                $appointmentDate = $medical_record['visit_date'];

                                // Konversi UTCDateTime menjadi objek DateTime PHP
                                $date = $appointmentDate->toDateTime();

                                // Format tanggal menjadi YYYY-MM-DD
                                $formattedDate = $date->format('Y-m-d');
                                ?>
                                <div class="text-sm text-gray-900"><?= $formattedDate; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    <?= $medical_record['diagnosis']; ?>
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <ul class="text-sm text-gray-900 list-disc list-inside">
                                    <li><?= $medical_record['treatment'][0]; ?></li>
                                    <li><?= $medical_record['treatment'][1]; ?></li>
                                </ul>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <?= $medical_record['notes']; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>