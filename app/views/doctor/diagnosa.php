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
                    href="<?= BASEURL; ?>/doctor/janji_temu_pasien"
                    class="text-gray-500 hover:text-gray-700">Janji Temu</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li class="text-blue-600">Diagnosa</li>
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

    <!-- Diagnosis Form -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Formulir Diagnosa</h2>
        <form>
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Keluhan Utama
                    </label>
                    <textarea
                        rows="3"
                        class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Hasil Pemeriksaan
                    </label>
                    <textarea
                        rows="3"
                        class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Diagnosa Utama
                        </label>
                        <select
                            class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option>Pilih Diagnosa</option>
                            <option>Hipertensi</option>
                            <option>Diabetes Mellitus</option>
                            <option>ISPA</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Diagnosa Tambahan
                        </label>
                        <input
                            type="text"
                            class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Tindakan
                    </label>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2" />
                            <span>Pemeriksaan Fisik</span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2" />
                            <span>Pengambilan Darah</span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2" />
                            <span>EKG</span>
                        </div>
                    </div>
                </div>

                <!-- Medication Section -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Resep Obat
                    </label>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <select
                                class="flex-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option>Pilih Obat</option>
                                <option>Paracetamol</option>
                                <option>Amoxicillin</option>
                            </select>
                            <input
                                type="text"
                                placeholder="Dosis"
                                class="w-32 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                            <input
                                type="text"
                                placeholder="Durasi"
                                class="w-32 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                            <button type="button" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <button type="button" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-plus mr-1"></i> Tambah Obat
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Medical History -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Riwayat Rekam Medis Terakhir</h2>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Tanggal
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Diagnosa
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Tindakan
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Dokter
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">15 Mar 2024</td>
                        <td class="px-6 py-4">Hipertensi</td>
                        <td class="px-6 py-4">Pemeriksaan Tekanan Darah</td>
                        <td class="px-6 py-4">Dr. Jane Smith</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex justify-between items-center">
        <button
            class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </button>
        <div class="space-x-4">
            <button
                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                <i class="fas fa-save mr-2"></i>Simpan
            </button>
            <button
                class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">
                <i class="fas fa-print mr-2"></i>Cetak
            </button>
        </div>
    </div>
</div>

<script>
    // Add your JavaScript for form handling here
</script>