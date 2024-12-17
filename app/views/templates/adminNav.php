<div class="p-4 sm:ml-64" id="mainContent">
    <!-- Top Navigation -->
    <nav
        class="bg-white p-4 rounded-lg shadow-sm mb-6 flex justify-between items-center">
        <div class="flex items-center">
            <button class="sm:hidden mr-4" id="hamburger">
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
</div>