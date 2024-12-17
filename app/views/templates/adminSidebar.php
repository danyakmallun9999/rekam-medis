    <!-- Sidebar -->
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        id="sidebar"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-900">
            <!-- Tambahkan tombol close untuk mobile -->
            <button class="absolute top-4 right-4 text-white sm:hidden" id="closeSidebar">
                <i class="fas fa-times"></i>
            </button>
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