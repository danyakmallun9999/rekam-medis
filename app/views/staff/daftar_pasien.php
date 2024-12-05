<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
  <nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li>
        <a href="<?= BASEURL; ?>/staff" class="text-gray-500 hover:text-gray-700">Dashboard Staff</a>
      </li>
      <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
      <li class="text-blue-600">Daftar Pasien</li>
      <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
      <li>
        <a href="<?= BASEURL; ?>/staff/tambah_pasien" class="text-gray-500 hover:text-gray-700">Tambah Pasien</a>
      </li>
    </ol>
  </nav>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
  <!-- Search and Filters -->
  <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
    <div
      class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
      <div class="flex-1">
        <div class="relative">
          <input
            type="text"
            placeholder="Cari pasien..."
            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
          <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
        </div>
      </div>
      <div class="flex flex-wrap gap-4">
        <select
          class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
          <option value="">Semua Gender</option>
          <option value="Male">Laki-laki</option>
          <option value="Female">Perempuan</option>
        </select>
        <select
          class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
          <option value="">Rentang Usia</option>
          <option value="0-20">0-20 tahun</option>
          <option value="21-40">21-40 tahun</option>
          <option value="41+">41+ tahun</option>
        </select>
        <a href="<?= BASEURL; ?>/staff/tambah_pasien">
          <button
            class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            <i class="fas fa-user-plus mr-2"></i>Pasien Baru
          </button>
        </a>
        <button
          class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">
          <i class="fas fa-print mr-2"></i>Cetak
        </button>
      </div>
    </div>
  </div>

  <!-- Patient Table -->
  <div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              ID Pasien
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Nama
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Tanggal Lahir
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Gender
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Nomor Kontak
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Alamat
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php foreach ($data["patients"] as $patient) : ?>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900"><?= $patient["_id"]; ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?= $patient["name"]; ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?= $patient['birth_date']->toDateTime()->format('d-m-Y'); ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span
                  class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  <?= $patient["gender"] == "Male" ? "bg-blue-100 text-blue-800" : "text-pink-800 bg-pink-100"; ?>">
                  <?= $patient["gender"]; ?>
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?= $patient["contact_number"]; ?></div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-900"><?= $patient["address"]; ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="<?= BASEURL; ?>/staff/hapus_pasien/<?= $patient["_id"]; ?>"
                  onclick="return confirm('Apakah Anda yakin ingin menghapus pasien ini?')"
                  class="text-red-600 hover:text-red-900 mr-3"
                  title="Hapus">
                  <i class="fas fa-trash"></i>
                </a>
                <a href="#" class="text-yellow-600 hover:text-yellow-900" title="Edit">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>