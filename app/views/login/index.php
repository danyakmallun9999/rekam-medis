<body class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100">
    <!-- Container Utama -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <!-- Card Login -->
        <div class="bg-white rounded-xl w-full max-w-md p-8 space-y-8 transform transition-all hover:scale-[1.01]">
            <!-- Header -->
            <div class="text-center">
                <!-- Logo -->
                <img src="<?= BASEURL; ?>/images/logo.png" alt="Logo" class="mx-auto h-16 w-auto mb-4">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">
                    Sistem Rekam Medis Elektronik
                </h2>
                <p class="text-gray-500">Silakan masuk ke akun Anda</p>
            </div>

            <!-- Form -->
            <form class="space-y-6" action="<?= BASEURL; ?>/login/authenticate" method="POST">
                <!-- Username/Email Field -->
                <?php if (!empty($data['error'])): ?>
                    <p class="text-red-500 text-center bg-red-100 border border-red-400 rounded-md px-4 py-2">
                        <?= $data['error'] ?>
                    </p>
                <?php endif; ?>
                <div>
                    <label id="username" for="username" class="block text-sm font-medium text-gray-700 mb-2">
                        Username
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-user text-gray-400"></i>
                        </span>
                        <input type="text" name="username" id="username"
                            placeholder="Masukkan Username"
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                            required>
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-lock text-gray-400"></i>
                        </span>
                        <input type="password" name="password" id="password"
                            placeholder="Masukkan Kata Sandi"
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                            required>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <!-- <div class="flex items-center">
                        <input type="checkbox"
                            id="remember_me"
                            class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                            Ingat Saya
                        </label>
                    </div> -->
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 transition-colors">
                        Lupa Kata Sandi?
                    </a>
                </div>

                <!-- Login Button -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform transition-all hover:-translate-y-0.5">
                    Masuk
                </button>

            </form>
        </div>
    </div>