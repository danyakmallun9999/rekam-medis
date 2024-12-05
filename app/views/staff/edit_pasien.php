<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <a href="<?= BASEURL; ?>/staff" class="text-gray-500 hover:text-gray-700">Dashboard Staff</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li>
                <a href="<?= BASEURL; ?>/staff/daftar_pasien" class="text-gray-500 hover:text-gray-700">Daftar Pasien</a>
            </li>
            <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
            <li class="text-blue-600">Edit Pasien</li>
        </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Edit Pasien</h2>

        <form action="<?= BASEURL; ?>/staff/updatePatient" method="POST" class="space-y-6">
            <!-- Hidden Input for ID -->
            <input type="hidden" name="_id" value="<?= $data['patient']['_id']; ?>">

            <!-- Full Name -->
            <div>
                <label for="full_name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    value="<?= $data['patient']['name']; ?>"
                    class="mt-1 block w-full p-3 border-blue-500 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Birth Date -->
            <div>
                <label for="birth_date" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input
                    type="date"
                    id="birth_date"
                    name="birth_date"
                    value="<?= $data['patient']['birth_date']->toDateTime()->format('Y-m-d'); ?>"
                    class="mt-1 block w-full p-3 border-blue-500 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Gender -->
            <div>
                <span class="block text-sm font-medium text-gray-700">Gender</span>
                <div class="mt-2 space-y-2 sm:flex sm:space-y-0 sm:space-x-4">
                    <label class="flex items-center">
                        <input
                            type="radio"
                            name="gender"
                            value="Male"
                            <?= $data['patient']['gender'] == 'Male' ? 'checked' : ''; ?>
                            class="form-radio h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Laki-laki</span>
                    </label>
                    <label class="flex items-center">
                        <input
                            type="radio"
                            name="gender"
                            value="Female"
                            <?= $data['patient']['gender'] == 'Female' ? 'checked' : ''; ?>
                            class="form-radio h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Perempuan</span>
                    </label>
                </div>
            </div>

            <!-- Contact Number -->
            <div>
                <label for="contact_number" class="block text-sm font-medium text-gray-700">Nomor Kontak</label>
                <input
                    type="text"
                    id="contact_number"
                    name="contact_number"
                    value="<?= $data['patient']['contact_number']; ?>"
                    class="mt-1 p-3 block w-full border-blue-500 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea
                    id="address"
                    name="address"
                    class="mt-1 p-3 block w-full border-blue-500 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"><?= $data['patient']['address']; ?></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4">
                <a href="<?= BASEURL; ?>/staff/daftar_pasien" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-gray-300">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Ubah Data</button>
            </div>
        </form>

    </div>
</div>