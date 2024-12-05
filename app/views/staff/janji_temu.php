<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
  <nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li>
        <a href="<?= BASEURL; ?>/staff" class="text-gray-500 hover:text-gray-700">Dashboard Staff</a>
      </li>
      <li><i class="fas fa-chevron-right text-gray-400 mx-2"></i></li>
      <li class="text-blue-600">Janji Temu Pasien</li>
    </ol>
  </nav>
</div>


<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

  <!-- Doctor Schedule Card -->
  <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
    <h2 class="text-lg font-semibold mb-4">Jadwal Dokter Hari Ini</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <?php foreach ($data["doctors"] as $doctor) : ?>
        <div class="border rounded-lg p-4">
          <div class="flex items-center mb-2">
            <div
              class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
              <i class="fas fa-user-md text-blue-500"></i>
            </div>
            <div class="ml-3">
              <h3 class="font-medium"><?= $doctor["name"]; ?></h3>
              <p class="text-sm text-gray-500"><?= $doctor["specialization"]; ?></p>
            </div>
          </div>
          <div class="mt-2">
            <div class="text-sm">
              <i class="far fa-clock mr-2"></i><?= $doctor["working_schedule"][0]["time"]; ?>
            </div>
            <div class="text-sm text-blue-600">5 Pasien Terjadwal</div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Search and Filters -->
  <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="relative">
        <input
          type="text"
          placeholder="Cari janji temu..."
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
      </div>
      <select
        class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
        <option value="">Semua Dokter</option>
        <option value="DOC-001">Dr. Emily Carter - Cardiology</option>
        <option value="DOC-002">Dr. Michael Brown - Dermatology</option>
      </select>
      <select
        class="border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
        <option value="">Semua Status</option>
        <option value="waiting">Tunggu Konfirmasi</option>
        <option value="confirmed">Dikonfirmasi</option>
        <option value="completed">Selesai</option>
      </select>
      <button
        class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 flex items-center justify-center">
        <i class="fas fa-plus mr-2"></i>Janji Temu Baru
      </button>
    </div>
  </div>

  <!-- Appointments Table -->
  <div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Pasien
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Dokter
            </th>
            <th
              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Tanggal & Waktu
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
          <?php foreach ($data['appointments'] as $appointment) : ?>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">
                <div class="flex items-center">
                  <div>
                    <div class="text-sm font-medium text-gray-900">
                      <?= $appointment['patient']['name']; ?>
                    </div>
                    <div class="text-sm text-gray-500"><?= $appointment['patient']['_id']; ?></div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-900"><?= $appointment['doctor']['name']; ?></div>
                <div class="text-sm text-gray-500"><?= $appointment['doctor']['specialization']; ?></div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-900">
                  <?= date('l, d F Y', strtotime($appointment['appointment_date']->toDateTime()->format('Y-m-d'))); ?>
                </div>
                <div class="text-sm text-gray-500">
                  <?= $appointment['appointment_time']['start']; ?> - <?= $appointment['appointment_time']['end']; ?>
                </div>
              </td>
              <td class="px-6 py-4">
                <span
                  class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
          <?= $appointment['status'] === 'Dikonfirmasi' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'; ?>">
                  <?= $appointment['status']; ?>
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="<?= BASEURL; ?>/staff/hapus_appointment/<?= $appointment["_id"]; ?>"
                  onclick="return confirm('Apakah Anda yakin ingin menghapus appointment ini?')"
                  class="text-red-600 hover:text-red-900 mr-3"
                  title="Hapus">
                  <i class="fas fa-trash"></i>
                </a>
                <a href="<?= BASEURL; ?>/staff/edit_pasien/<?= $appointment['_id']; ?>"
                  class="text-yellow-600 hover:text-yellow-900"
                  title="Edit">
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

<!-- Modal for New Appointment (Hidden by default) -->
<div
  class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"
  id="appointmentModal">
  <div
    class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
    <div class="mt-3 text-center">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Buat Janji Temu Baru
      </h3>
      <div class="mt-2 px-7 py-3">
        <!-- Form content here -->
      </div>
    </div>
  </div>
</div>