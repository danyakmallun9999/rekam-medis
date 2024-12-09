<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <a href="<?= BASEURL; ?>/staff" class="text-gray-500 hover:text-gray-700">Dashboard Staff</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li>
                <a href="<?= BASEURL; ?>/staff/janji_temu" class="text-gray-500 hover:text-gray-700">Janji Temu Pasien</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li class="text-blue-600">Tambah Janji Temu</li>
        </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-xl font-semibold mb-6">Formulir Janji Temu Baru</h2>

        <?php foreach ($data['appointments'] as $appointment) : ?>
            <form action="<?= BASEURL; ?>/staff/updateAppointment" method="POST">
                <input type="hidden" name="_id" value="<?= $appointment['_id']; ?>">
                <div class="space-y-6">
                    <!-- Patient Selection -->
                    <div>
                        <label for="patient" class="block text-sm font-medium text-gray-700 mb-1">
                            Nama Pasien <span class="text-red-500">*</span>
                        </label>
                        <select
                            id="patient"
                            name="patient_id"
                            required
                            class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option value="" selected><?= $appointment['patient']['name']; ?></option>
                            <?php foreach ($data["patients"] as $patient): ?>
                                <option
                                    <?= ($appointment['patient']['_id'] == $patient['_id']) ? 'selected' : ''; ?>
                                    value="<?= $patient['_id']; ?>">
                                    <?= $patient['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Doctor Selection -->
                    <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4"> -->
                    <div>
                        <label for="doctor" class="block text-sm font-medium text-gray-700 mb-1">
                            Dokter <span class="text-red-500">*</span>
                        </label>
                        <select
                            id="doctor"
                            name="doctor_id"
                            required
                            class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option value="" selected><?= $appointment['doctor']['name']; ?></option>
                            <?php foreach ($data['doctors'] as $doctor): ?>
                                <option
                                    <?= ($appointment['doctor']['_id'] == $doctor['_id']) ? 'selected' : ''; ?>
                                    value="<?= $doctor['_id']; ?>">
                                    <?= $doctor['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                    </div>

                    <div>
                        <select
                            hidden
                            id="status"
                            name="status"
                            class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option value="Menunggu">Tunggu Konfirmasi</option>
                        </select>
                    </div>
                    <!-- </div>
                
                <!-- Date and Time Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-1">
                                Tanggal <span class="text-red-500">*</span>
                            </label>
                            <?php
                            // Mengambil UTCDateTime dari MongoDB
                            $appointmentDate = $appointment['appointment_date'];

                            // Konversi UTCDateTime menjadi objek DateTime PHP
                            $date = $appointmentDate->toDateTime();

                            // Format tanggal menjadi YYYY-MM-DD
                            $formattedDate = $date->format('Y-m-d');
                            ?>
                            <input
                                type="date"
                                value="<?= $formattedDate ?>"
                                id="date"
                                name="appointment_date"
                                required
                                class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label for="start_time" class="block text-sm font-medium text-gray-700 mb-1">
                                Waktu Mulai <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="time"
                                value="<?= $appointment['appointment_time']['start']; ?>"
                                id="start_time"
                                name="start_time"
                                required
                                class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label for="end_time" class="block text-sm font-medium text-gray-700 mb-1">
                                Waktu Selesai <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="time"
                                value="<?= $appointment['appointment_time']['end']; ?>"
                                id="end_time"
                                name="end_time"
                                required
                                class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                        </div>
                    </div>

                    <!-- Notes -->
                    <div>
                        <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">
                            Catatan
                        </label>
                        <textarea
                            id="notes"
                            name="notes"
                            rows="3"
                            class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Tambahkan catatan jika diperlukan..."></textarea>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-4 pt-4">
                        <button
                            type="button"
                            onclick="window.history.back()"
                            class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500">
                            <i class="fas fa-times mr-2"></i>Batal
                        </button>
                        <button
                            type="submit"
                            class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-save mr-2"></i>Simpan
                        </button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>

    </div>
</div>

<!-- Confirmation Modal (Hidden by default) -->
<div
    class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"
    id="confirmationModal">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Konfirmasi Janji Temu
            </h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500">
                    Apakah Anda yakin ingin menyimpan janji temu ini?
                </p>
            </div>
            <div class="flex justify-center gap-4 mt-4">
                <button
                    id="cancelButton"
                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">
                    Batal
                </button>
                <button
                    id="confirmButton"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Konfirmasi
                </button>
            </div>
        </div>
    </div>
</div>