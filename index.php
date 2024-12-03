<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Rekam Medis Elektronik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-code.js"></script>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Left Section -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-blue-600 to-blue-600 p-12 flex-col justify-between text-white opacity-0" id="leftSection">
            <!-- Logo Section -->
            <div class="mb-8">
                <img src="<?= BASEURL; ?>/images/logo.png" alt="Logo" class="h-12">
            </div>

            <!-- Content Section -->
            <div class="space-y-6">
                <h1 class="text-4xl font-bold">Sistem Rekam Medis Elektronik</h1>
                <p class="text-xl text-blue-100">
                    Platform modern untuk pengelolaan data medis yang aman,
                    efisien, dan terintegrasi.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-shield-alt text-blue-200"></i>
                        <span>Keamanan Data Terjamin</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-sync text-blue-200"></i>
                        <span>Akses Real-time</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-user-md text-blue-200"></i>
                        <span>Kolaborasi Tim Medis</span>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-sm text-blue-200">
                © 2024 EMR System. All rights reserved.
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 opacity-0" id="rightSection">
            <div class="w-full max-w-md space-y-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900">Selamat Datang</h2>
                    <p class="mt-2 text-gray-600">Silakan masuk ke akun Anda</p>
                </div>

                <form class="mt-8 space-y-6" action="<?= BASEURL; ?>/auth/login" method="POST">
                    <div class="space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <div class="mt-1 relative">
                                <input id="email" name="email" type="email" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-lg 
                                    shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 
                                    focus:border-blue-500 transition duration-150"
                                    placeholder="nama@example.com">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="mt-1 relative">
                                <input id="password" name="password" type="password" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-lg 
                                    shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 
                                    focus:border-blue-500 transition duration-150"
                                    placeholder="••••••••">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <button type="button" id="togglePassword" class="text-gray-400 hover:text-gray-500">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                                Ingat saya
                            </label>
                        </div>

                        <a href="<?= BASEURL; ?>/auth/forgot-password"
                            class="text-sm font-medium text-blue-600 hover:text-blue-500">
                            Lupa password?
                        </a>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg 
                        shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 
                        transition duration-150">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Animasi dengan GSAP
        window.addEventListener('DOMContentLoaded', (event) => {
            // Animasi untuk bagian kiri
            gsap.to("#leftSection", {
                opacity: 1,
                duration: 1,
                ease: "power2.out"
            });

            // Animasi untuk bagian kanan
            gsap.to("#rightSection", {
                opacity: 1,
                duration: 1,
                delay: 0.3,
                ease: "power2.out"
            });
        });

        // Toggle Password Visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const icon = this.querySelector('i');

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>

</html>