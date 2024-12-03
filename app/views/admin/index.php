<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet" />
    <!-- Chart.js untuk grafik -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-900">
            <div class="flex items-center pb-4 mb-4 border-b border-gray-700">
                <img
                    src="https://via.placeholder.com/50"
                    class="w-10 h-10 rounded-full" />
                <div class="ml-3">
                    <h2 class="text-lg font-semibold text-white">Admin Panel</h2>
                    <p class="text-sm text-gray-400">Super Admin</p>
                </div>
            </div>

            <ul class="space-y-2">
                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700">
                        <i class="fas fa-dashboard w-6"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg hover:bg-gray-700">
                        <i class="fas fa-users w-6"></i>
                        <span>Manajemen Pengguna</span>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg hover:bg-gray-700">
                        <i class="fas fa-user-md w-6"></i>
                        <span>Manajemen Dokter</span>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg hover:bg-gray-700">
                        <i class="fas fa-chart-bar w-6"></i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg hover:bg-gray-700">
                        <i class="fas fa-cog w-6"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="p-4 sm:ml-64">
        <!-- Top Navigation -->
        <nav
            class="bg-white p-4 rounded-lg shadow-sm mb-6 flex justify-between items-center">
            <div class="flex items-center">
                <button class="sm:hidden mr-4">
                    <i class="fas fa-bars text-gray-500"></i>
                </button>
                <h1 class="text-xl font-semibold">Dashboard Admin</h1>
            </div>
            <div class="flex items-center space-x-4">
                <button class="relative">
                    <i class="fas fa-bell text-gray-500"></i>
                    <span
                        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">5</span>
                </button>
                <button>
                    <a href="<?= BASEURL; ?>/login/logout"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </button>
            </div>
        </nav>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 rounded-full">
                        <i class="fas fa-users text-blue-500"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Total Pengguna</h3>
                        <p class="text-2xl font-semibold">2,453</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-full">
                        <i class="fas fa-user-md text-green-500"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Total Dokter</h3>
                        <p class="text-2xl font-semibold">125</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 bg-yellow-100 rounded-full">
                        <i class="fas fa-user-injured text-yellow-500"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Pasien Aktif</h3>
                        <p class="text-2xl font-semibold">1,789</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 bg-red-100 rounded-full">
                        <i class="fas fa-exclamation-triangle text-red-500"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-500 text-sm">Masalah Tertunda</h3>
                        <p class="text-2xl font-semibold">8</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Management Table -->
        <div class="bg-white rounded-lg shadow-sm mb-6 overflow-hidden">
            <div
                class="p-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-lg font-semibold">Manajemen Pengguna</h2>
                <button
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    <i class="fas fa-plus mr-2"></i>Tambah Pengguna
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Peran
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
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img
                                        class="h-8 w-8 rounded-full"
                                        src="https://via.placeholder.com/40"
                                        alt="" />
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            John Doe
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">john@example.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Admin
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    Edit
                                </button>
                                <button class="text-red-600 hover:text-red-900">Hapus</button>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Analytics and Recent Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Analytics Chart -->
            <!-- <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-sm">
          <h2 class="text-lg font-semibold mb-4">Analitik Pengguna</h2>
          <canvas id="userChart" height="200"></canvas>
        </div> -->

            <!-- Recent Activity -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h2>
                <div class="space-y-4 max-h-[400px] overflow-y-auto">
                    <div class="flex items-start">
                        <div class="p-2 bg-blue-100 rounded-full">
                            <i class="fas fa-user-plus text-blue-500"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm">Pengguna baru terdaftar</p>
                            <p class="text-xs text-gray-500">2 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="p-2 bg-yellow-100 rounded-full">
                            <i class="fas fa-edit text-yellow-500"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm">Pembaruan peran pengguna</p>
                            <p class="text-xs text-gray-500">15 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="p-2 bg-red-100 rounded-full">
                            <i class="fas fa-exclamation-circle text-red-500"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm">Peringatan sistem</p>
                            <p class="text-xs text-gray-500">1 jam yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle sidebar for mobile
        document
            .querySelector("button.sm\\:hidden")
            .addEventListener("click", function() {
                document.querySelector("aside").classList.toggle("-translate-x-full");
            });

        // Sample chart
        // const ctx = document.getElementById("userChart").getContext("2d");
        // new Chart(ctx, {
        //   type: "line",
        //   data: {
        //     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        //     datasets: [
        //       {
        //         label: "Pengguna Baru",
        //         data: [65, 59, 80, 81, 56, 55],
        //         borderColor: "rgb(59, 130, 246)",
        //         tension: 0.1,
        //       },
        //     ],
        //   },
        //   options: {
        //     responsive: true,
        //     maintainAspectRatio: false,
        //   },
        // });
    </script>
</body>

</html>