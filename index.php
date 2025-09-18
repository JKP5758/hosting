<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JKP Host - Solusi Hosting Cepat & Andal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom styles for modal transition */
        #order-modal.hidden {
            display: none;
        }

        .modal-enter {
            opacity: 0;
            transform: scale(0.95);
        }

        .modal-enter-active {
            opacity: 1;
            transform: scale(1);
            transition: all 0.2s ease-out;
        }

        .modal-leave {
            opacity: 1;
            transform: scale(1);
        }

        .modal-leave-active {
            opacity: 0;
            transform: scale(0.95);
            transition: all 0.2s ease-in;
        }

        .password-validation-icon {
            transition: color 0.2s;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header & Navigasi -->
    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-40 border-b border-gray-200">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-900">
                JKP<span class="text-indigo-600">Host</span>
            </a>
            <nav class="hidden md:flex space-x-8">
                <a href="#fitur" class="text-gray-600 hover:text-indigo-600 transition-colors">Fitur</a>
                <a href="#harga" class="text-gray-600 hover:text-indigo-600 transition-colors">Harga</a>
                <a href="#kontak" class="text-gray-600 hover:text-indigo-600 transition-colors">Kontak</a>
            </nav>
            <a href="#harga"
                class="hidden md:block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors shadow-sm">
                Mulai Sekarang
            </a>
            <button id="mobile-menu-button" class="md:hidden text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
            <a href="#fitur" class="block py-3 px-6 text-gray-600 hover:bg-gray-100 hover:text-indigo-600">Fitur</a>
            <a href="#harga" class="block py-3 px-6 text-gray-600 hover:bg-gray-100 hover:text-indigo-600">Harga</a>
            <a href="#kontak" class="block py-3 px-6 text-gray-600 hover:bg-gray-100 hover:text-indigo-600">Kontak</a>
            <div class="p-4">
                <a href="#harga"
                    class="w-full text-center block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors shadow-sm">
                    Mulai Sekarang
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="py-20 md:py-24">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="text-center md:text-left">
                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight mb-4">
                            Hosting Cepat, Aman, dan Andal
                        </h1>
                        <p class="text-lg md:text-xl text-gray-600 max-w-xl mx-auto md:mx-0 mb-8">
                            Wujudkan website impian Anda dengan performa terbaik. Kami menyediakan solusi hosting yang
                            mudah digunakan untuk semua skala kebutuhan.
                        </p>
                        <a href="#harga"
                            class="bg-indigo-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-indigo-700 transition-transform transform hover:scale-105 shadow-lg inline-block">
                            Lihat Paket Hosting
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <img src="hero.png" alt="Ilustrasi Web Hosting" class="drop-shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Fitur Section -->
        <section id="fitur" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Semua yang Anda Butuhkan</h2>
                    <p class="text-lg text-gray-600 mt-2">Fitur unggulan untuk performa website maksimal.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Fitur 1 -->
                    <div class="bg-gray-50 p-8 rounded-xl border border-gray-200">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Performa Cepat</h3>
                        <p class="text-gray-600">Dengan teknologi server terkini dan SSD NVMe, website Anda akan dimuat
                            dalam sekejap.</p>
                    </div>
                    <!-- Fitur 2 -->
                    <div class="bg-gray-50 p-8 rounded-xl border border-gray-200">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Keamanan Terjamin</h3>
                        <p class="text-gray-600">SSL gratis, proteksi DDoS, dan pemindaian malware rutin menjaga website
                            Anda tetap aman.</p>
                    </div>
                    <!-- Fitur 3 -->
                    <div class="bg-gray-50 p-8 rounded-xl border border-gray-200">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Dukungan 24/7</h3>
                        <p class="text-gray-600">Tim support ahli kami siap membantu Anda kapan saja melalui live chat,
                            ataupun email.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Harga Section -->
        <section id="harga" class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Paket Harga yang Sesuai</h2>
                    <p class="text-lg text-gray-600 mt-2">Pilih paket yang paling cocok dengan kebutuhan Anda.</p>
                </div>
                <div class="flex flex-wrap justify-center gap-8">
                    <!-- Paket Basic -->
                    <div class="w-full max-w-sm bg-white p-8 rounded-xl border border-gray-200 shadow-md flex flex-col">
                        <h3 class="text-2xl font-semibold text-center mb-2">Personal</h3>
                        <p class="text-center text-gray-600 mb-6">Cocok untuk blog pribadi atau portofolio.</p>
                        <p class="text-center text-4xl font-bold mb-6">Rp25k<span
                                class="text-lg font-normal text-gray-500">/bln</span></p>
                        <ul class="space-y-4 text-gray-600 mb-8 flex-grow">
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> 1 Website</li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> 1 GB SSD Storage
                            </li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> 1 Database</li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> Domain Gratis</li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> SSL Gratis</li>
                        </ul>
                        <button data-paket="Personal"
                            class="select-package-btn w-full text-center bg-gray-200 text-gray-800 font-semibold px-6 py-3 rounded-lg hover:bg-gray-300 transition-colors">Pilih
                            Paket</button>
                    </div>
                    <!-- Paket Populer -->
                    <div
                        class="w-full max-w-sm bg-white p-8 rounded-xl border-2 border-indigo-600 shadow-xl flex flex-col relative overflow-hidden">
                        <span
                            class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-4 py-1 rounded-bl-lg">Paling
                            Populer</span>
                        <h3 class="text-2xl font-semibold text-center mb-2">Bisnis</h3>
                        <p class="text-center text-gray-600 mb-6">Untuk website bisnis dan toko online.</p>
                        <p class="text-center text-4xl font-bold mb-6">Rp75k<span
                                class="text-lg font-normal text-gray-500">/bln</span></p>
                        <ul class="space-y-4 text-gray-600 mb-8 flex-grow">
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> 10 Website</li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> 10 GB SSD Storage
                            </li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> 10 Database</li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> Performa 2x Lebih
                                Cepat</li>
                            <li class="flex items-center"><span class="text-indigo-600 mr-3">✔</span> Backup Mingguan
                            </li>
                        </ul>
                        <button data-paket="Bisnis"
                            class="select-package-btn w-full text-center bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors">Pilih
                            Paket</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer id="kontak" class="bg-gray-900 text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col md:items-center md:text-center items-start text-left">
                    <h3 class="text-xl font-bold">JKP Host</h3>
                    <p class="text-gray-400 mt-2">Menyediakan solusi hosting terbaik untuk kesuksesan online Anda.</p>
                </div>
                <div class="flex flex-col md:items-center md:text-center items-start text-left">
                    <h3 class="text-lg font-semibold">Hubungi Kami</h3>
                    <ul class="mt-2 space-y-2 text-gray-400">
                        <li>Email: host.jkp@gmail.com</li>
                        <li>Telepon: +62 823-1392-1367</li>
                    </ul>
                </div>
                <div class="flex flex-col md:items-center md:text-center items-start text-left">
                    <h3 class="text-lg font-semibold">Ikuti Kami</h3>
                    <div class="flex space-x-4 mt-2">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://x.com/JKP5758/" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/jkp_web/" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.08 2.525c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zM12 7a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zm6.406-11.646a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-6 text-center text-gray-500 text-sm">
                &copy; <span id="year"></span> JKP Host. Semua Hak Cipta Dilindungi.
            </div>

        </div>
    </footer>

    <!-- Modal Form -->
    <div id="order-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50">
        <div id="modal-content" class="bg-white w-full max-w-md p-8 rounded-xl shadow-2xl relative modal-enter">
            <button id="close-modal-btn"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Pesan Paket: <span id="paket-dipilih"
                    class="text-indigo-600"></span></h2>
            <p class="text-gray-500 mb-6">Lengkapi data diri Anda untuk melanjutkan.</p>

            <form action="order.php" method="post" id="order-form" class="space-y-4">
                <!-- Step 1 -->
                <div id="form-step-1" class="space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required
                            class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <!-- Kode negara fixed -->
                            <span
                                class="inline-flex items-center px-3 rounded-l-md border border-gray-300 bg-gray-100 text-gray-700 text-sm select-none">
                                +62
                            </span>

                            <!-- Nomor telepon -->
                            <input type="text" id="telepon" name="telepon" required
                                class="flex-1 px-3 py-2 border-t border-b border-r border-gray-300 rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="812-1234-1234" maxlength="14">
                        </div>
                    </div>

                    <div>
                        <label for="domain" class="block text-sm font-medium text-gray-700">Nama Domain</label>
                        <div class="mt-1 flex rounded-md shadow-sm items-center">
                            <input type="text" name="domain" id="domain" required
                                class="flex-1 block w-full px-3 py-2 border rounded-l-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="misal: nama-situs">
                            <span
                                class="inline-flex items-center px-3 py-2 ml-0.5 rounded-r-md border border-l-0 bg-gray-50 text-gray-500 text-sm">.host.jkp.my.id</span>
                        </div>
                        <!-- status dan helper -->
                        <p id="domain-status" class="mt-2 text-sm text-gray-500">Masukkan nama domain tanpa ekstensi.
                        </p>
                    </div>

                    <div class="pt-4">
                        <button type="button" id="next-btn"
                            class="w-full py-3 px-4 rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">Next</button>
                    </div>
                </div>

                <!-- Step 2 -->
                <div id="form-step-2" class="space-y-4 hidden">
                    <div>
                        <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
                        <input type="text" id="nickname" name="nickname" required
                            class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required
                            class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Konfirmasi
                            Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" required
                            class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Validasi password -->
                    <div id="password-validation-rules" class="text-sm space-y-1">
                        <p id="length-rule" class="text-gray-500 flex items-center"><span
                                class="password-validation-icon mr-2">●</span> Minimal 8 karakter</p>
                        <p id="letter-rule" class="text-gray-500 flex items-center"><span
                                class="password-validation-icon mr-2">●</span> Minimal 1 huruf</p>
                        <p id="number-rule" class="text-gray-500 flex items-center"><span
                                class="password-validation-icon mr-2">●</span> Minimal 1 angka</p>
                        <p id="match-rule" class="text-gray-500 flex items-center"><span
                                class="password-validation-icon mr-2">●</span> Password harus cocok</p>
                    </div>

                    <div class="flex justify-between pt-4">
                        <button type="button" id="back-btn"
                            class="px-4 py-2 rounded-md bg-gray-300 text-gray-800 hover:bg-gray-400">Back</button>
                        <button type="submit"
                            class="px-6 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 disabled:bg-gray-400 disabled:cursor-not-allowed">Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script>
        document.getElementById("year").textContent = new Date().getFullYear();

        // Step form navigation
        const step1 = document.getElementById("form-step-1");
        const step2 = document.getElementById("form-step-2");
        const nextBtn = document.getElementById("next-btn");
        const backBtn = document.getElementById("back-btn");

        nextBtn.addEventListener("click", () => {
            step1.classList.add("hidden");
            step2.classList.remove("hidden");
        });

        backBtn.addEventListener("click", () => {
            step2.classList.add("hidden");
            step1.classList.remove("hidden");
        });

        const teleponInput = document.getElementById("telepon");

        teleponInput.addEventListener("input", () => {
            // Hapus semua karakter non-angka
            let value = teleponInput.value.replace(/\D/g, "");

            // Format jadi XXX-XXXX-XXXX
            if (value.length > 3 && value.length <= 7) {
                value = value.slice(0, 3) + "-" + value.slice(3);
            } else if (value.length > 7) {
                value = value.slice(0, 3) + "-" + value.slice(3, 7) + "-" + value.slice(7, 12);
            }

            teleponInput.value = value;
        });

        // JavaScript untuk menu mobile
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Menutup menu saat link di-klik
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // JavaScript untuk Modal Form
        const selectPackageButtons = document.querySelectorAll('.select-package-btn');
        const orderModal = document.getElementById('order-modal');
        const modalContent = document.getElementById('modal-content');
        const closeModalButton = document.getElementById('close-modal-btn');
        const paketDipilihSpan = document.getElementById('paket-dipilih');
        const orderForm = document.getElementById('order-form');

        // Password validation elements
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm-password');
        const lengthRule = document.getElementById('length-rule');
        const letterRule = document.getElementById('letter-rule');
        const numberRule = document.getElementById('number-rule');
        const matchRule = document.getElementById('match-rule');
        const submitButton = orderForm.querySelector('button[type="submit"]');

        const validationRules = {
            length: false,
            letter: false,
            number: false,
            match: false
        };

        function updateValidationUI() {
            const rules = {
                length: {
                    el: lengthRule,
                    valid: validationRules.length
                },
                letter: {
                    el: letterRule,
                    valid: validationRules.letter
                },
                number: {
                    el: numberRule,
                    valid: validationRules.number
                },
                match: {
                    el: matchRule,
                    valid: validationRules.match
                }
            };

            for (const key in rules) {
                const icon = rules[key].el.querySelector('.password-validation-icon');
                if (rules[key].valid) {
                    rules[key].el.classList.remove('text-gray-500');
                    rules[key].el.classList.add('text-green-600');
                    icon.textContent = '✔';
                } else {
                    rules[key].el.classList.add('text-gray-500');
                    rules[key].el.classList.remove('text-green-600');
                    icon.textContent = '●';
                }
            }
            // Enable/disable submit button
            const allValid = Object.values(validationRules).every(Boolean);
            submitButton.disabled = !allValid;
        }


        function validatePassword() {
            const pass = passwordInput.value;
            const confirmPass = confirmPasswordInput.value;

            // Rule 1: Length >= 8
            validationRules.length = pass.length >= 8;

            // Rule 2: Contains a letter
            validationRules.letter = /[a-zA-Z]/.test(pass);

            // Rule 3: Contains a number
            validationRules.number = /\d/.test(pass);

            // Rule 4: Passwords match
            validationRules.match = pass && pass === confirmPass;

            updateValidationUI();
        }

        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePassword);

        // Fungsi untuk membuka modal
        const openModal = (packageName) => {
            paketDipilihSpan.textContent = packageName;
            orderModal.classList.remove('hidden');
            // Animate entrance
            modalContent.classList.remove('modal-leave', 'modal-leave-active');
            modalContent.classList.add('modal-enter-active');
            setTimeout(() => modalContent.classList.remove('modal-enter-active', 'modal-enter'), 200);

            // Reset form dan validasi saat modal dibuka
            orderForm.reset();
            Object.keys(validationRules).forEach(k => validationRules[k] = false);
            updateValidationUI();
        };

        // Fungsi untuk menutup modal
        const closeModal = () => {
            // Animate exit
            modalContent.classList.remove('modal-enter', 'modal-enter-active');
            modalContent.classList.add('modal-leave-active');
            setTimeout(() => {
                modalContent.classList.remove('modal-leave-active', 'modal-leave');
                orderModal.classList.add('hidden');
            }, 200);
        };

        // Event listener untuk setiap tombol "Pilih Paket"
        selectPackageButtons.forEach(button => {
            button.addEventListener('click', () => {
                const packageName = button.getAttribute('data-paket');
                openModal(packageName);
            });
        });

        // Event listener untuk tombol close
        closeModalButton.addEventListener('click', closeModal);

        // Event listener untuk menutup modal saat klik di luar area form
        orderModal.addEventListener('click', (event) => {
            if (event.target === orderModal) {
                closeModal();
            }
        });

        // Event listener untuk form submission
        orderForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const allValid = Object.values(validationRules).every(Boolean);
            if (allValid) {
                const formData = new FormData(orderForm);
                
                // Show loading state
                const submitButton = orderForm.querySelector('button[type="submit"]');
                const originalText = submitButton.textContent;
                submitButton.disabled = true;
                submitButton.textContent = 'Memproses...';
                
                try {
                    const response = await fetch('order.php', {
                        method: 'POST',
                        body: formData
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        alert(`Pendaftaran untuk paket ${paketDipilihSpan.textContent} berhasil!\n\nDomain: ${result.domain}\nOrder ID: ${result.order_id}`);
                        closeModal();
                    } else {
                        alert('Error: ' + result.error);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim data. Silakan coba lagi.');
                } finally {
                    // Reset button state
                    submitButton.disabled = false;
                    submitButton.textContent = originalText;
                }
            } else {
                alert('Harap penuhi semua persyaratan password.');
            }
        });

        // DOMAIN AVAILABILITY CHECK (pakai check.php yang sudah ada)
        (function() {
            const domainInput = document.getElementById('domain');
            const domainStatus = document.getElementById('domain-status');
            const nextBtn = document.getElementById('next-btn'); // tombol Next pada step 1
            let debounceTimer = null;
            const SUFFIX = '.host.jkp.my.id'; // suffix yang otomatis ditambahkan saat cek

            function setStatus(text, state) {
                // state: 'idle'|'checking'|'available'|'taken'|'error'
                domainStatus.textContent = text;
                domainStatus.classList.remove('text-gray-500', 'text-indigo-600', 'text-green-600', 'text-red-600');
                if (state === 'checking') domainStatus.classList.add('text-indigo-600');
                else if (state === 'available') domainStatus.classList.add('text-green-600');
                else if (state === 'taken') domainStatus.classList.add('text-red-600');
                else domainStatus.classList.add('text-gray-500');
            }

            function normalizeInput(v) {
                // hanya izinkan huruf, angka, dash; hilangkan spasi & huruf besar -> lowercase
                return v.toLowerCase().replace(/[^a-z0-9\-]/g, '').replace(/^-+|-+$/g, '');
            }

            function toggleNext(enabled) {
                if (!nextBtn) return;
                nextBtn.disabled = !enabled;
                if (enabled) nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                else nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
            }

            domainInput.addEventListener('input', (e) => {
                // sanitize on-the-fly (kece bgt)
                const pos = domainInput.selectionStart;
                const clean = normalizeInput(domainInput.value);
                domainInput.value = clean;
                // restore caret (simple attempt)
                try {
                    domainInput.setSelectionRange(pos, pos);
                } catch (_) {}

                setStatus('Menunggu...', 'idle');
                toggleNext(false);

                if (debounceTimer) clearTimeout(debounceTimer);
                debounceTimer = setTimeout(async () => {
                    const name = domainInput.value.trim();
                    if (!name) {
                        setStatus('Masukkan nama domain terlebih dahulu.', 'idle');
                        toggleNext(false);
                        return;
                    }

                    // jangan cek kalau format tidak valid (misal terlalu pendek)
                    if (name.length < 2) {
                        setStatus('Nama domain terlalu pendek.', 'error');
                        toggleNext(false);
                        return;
                    }

                    const fullHost = name + SUFFIX;
                    setStatus(`Memeriksa ${fullHost} ...`, 'checking');

                    try {
                        const url = `domain_check.php?domain=${encodeURIComponent(name)}`;
                        console.log('[DomainCheck] Checking', { input: name, fullHost, url });
                        const res = await fetch(url, {
                            cache: 'no-store'
                        });
                        console.log('[DomainCheck] HTTP status', res.status);
                        if (!res.ok) throw new Error('HTTP ' + res.status);
                        const data = await res.json();
                        console.log('[DomainCheck] Response JSON', data);

                        // API domain_check.php: { exists: true/false } atau { error: "..." }
                        if (data.error) {
                            console.warn('[DomainCheck] Server error:', data.error);
                            setStatus('Error: ' + data.error, 'error');
                            toggleNext(false);
                        } else if (data.exists) {
                            console.log('[DomainCheck] Domain taken:', fullHost);
                            setStatus(`${fullHost} sudah terdaftar (tidak tersedia).`, 'taken');
                            toggleNext(false);
                        } else {
                            console.log('[DomainCheck] Domain available:', fullHost);
                            setStatus(`${fullHost} tersedia ✅`, 'available');
                            toggleNext(true);
                        }
                    } catch (err) {
                        console.error('[DomainCheck] Fetch failed:', err);
                        setStatus('Gagal memeriksa domain. Coba lagi nanti.', 'error');
                        toggleNext(false);
                    }
                }, 600); // debounce 600ms
            });

            // optional: cek saat focusout juga (untuk jaga-jaga)
            domainInput.addEventListener('blur', () => {
                // trigger input handler once immediately
                const ev = new Event('input', {
                    bubbles: true
                });
                domainInput.dispatchEvent(ev);
            });

        })();
    </script>

</body>

</html>