<!-- Navigation Bar -->
<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <img src="<?= BASEURL; ?>/images/logo.png" alt="Logo" class="h-8 w-auto" />
                <h1 class="ml-4 text-xl font-semibold">
                    Sistem Rekam Medis Elektronik
                </h1>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bell text-xl"></i>
                        <span
                            class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                    </button>
                </div>
                <span class="text-gray-700"><?= $data["user"]; ?></span>
                <button>
                    <a href="<?= BASEURL; ?>/login/logout"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </button>
            </div>
        </div>
    </div>
</nav>