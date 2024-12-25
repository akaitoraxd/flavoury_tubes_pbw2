<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury</title>
    @Vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-[#FAF7F2] to-[#FDEBD0] font-sans text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#F1E4C3] py-4 px-8 flex justify-between items-center shadow-md fixed top-0 left-0 w-full z-20">
        <h1 class="text-2xl font-bold text-gray-800 tracking-wide">Flavoury</h1>
        <a href="/login"
            class="bg-[#C6A969] text-black py-2 px-6 rounded-md border border-black hover:bg-[#B89054] hover:shadow-lg shadow-[4px_4px_0px_rgba(105,63,35,0.7)] transition-all duration-300">
            Login
        </a>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex flex-col lg:flex-row items-center justify-between px-10 lg:px-20 relative ">
        <div class="lg:w-1/2 text-start z-10 space-y-6 md:my-auto my-auto">
            <h1 class="text-6xl lg:text-7xl font-bold text-gray-800 leading-tight">
                Cari Kuliner Favoritmu
            </h1>
            <p class="mt-4 text-lg text-gray-700 font-medium leading-relaxed">
            Biarkan Flavoury memandu Anda melalui perjalanan rasa dan gairah. Jelajahi resep yang tak terlupakan dan nikmati seni memasak.
            </p>
            <button onclick="location.href='#isi'" class="mt-6 bg-[#C6A969] text-white py-3 px-8 rounded-md hover:bg-[#B89054] hover:shadow-lg shadow-lg transition-all duration-300">
                Mulai Sekarang
            </button>
        </div>
        <div class="lg:w-1/2 lg:relative absolute sm:z-10 flex justify-center lg:justify-end z-0 md:my-auto my-auto">
            <img src="/storage/first.png" alt="Decorative Background"
                class="max-w-full h-[80vh] object-contain opacity-10 lg:opacity-100 ">
        </div>
    </section>

    <!-- Why Flavoury Section -->
    <section id="isi" class="h-[100vh] flex items-center justify-start px-6">
        <div class="w-1/2">
            <h2 class="text-4xl font-semibold text-gray-800 mb-6 border-b-4 border-[#C6A969] pb-2">
                Kenapa Flavoury?
            </h2>
            <p class="text-lg text-gray-700 leading-relaxed">
            Temukan mengapa Flavoury adalah pilihan terbaik bagi penggemar kuliner. Kami menghadirkan inspirasi, kemudahan, dan kegembiraan ke dapur Anda.
            </p>
        </div>
        <div class="absolute w-full h-full flex justify-end px-2 overflow-auto"><!-- yang ini-->
            <div class="w-1/2 space-y-6">
                <!-- Zig-Zag Content -->
                <div
                    class="w-1/2 h-[300px] bg-[#F1E4C3] border border-gray-300 rounded-lg shadow-lg p-6 ml-0 mr-auto hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Kelola Resep</h3>
                    <p class="text-gray-700 leading-relaxed">
                    Pengguna dapat mengelola resep mereka sendiri dan berbagi dengan pengguna lain.
                    </p>
                </div>
                <div
                    class="w-1/2 h-[300px] bg-[#F1E4C3] border border-gray-300 rounded-lg shadow-lg p-6 mr-0 ml-auto hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Jelajah Resep</h3>
                    <p class="text-gray-700 leading-relaxed">
                    Temukan resep yang sesuai dengan keinginan Anda dan nikmati pengalaman memasak yang menyenangkan.
                    </p>
                </div>
                <div
                    class="w-1/2 h-[300px] bg-[#F1E4C3] border border-gray-300 rounded-lg shadow-lg p-6 ml-0 mr-auto hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Market</h3>
                    <p class="text-gray-700 leading-relaxed">
                    Temukan bahan berkualitas dan alat masak terbaik untuk memenuhi kebutuhan dapur Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-[#C6A969] py-16 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Bergabunglah dengan Komunitas Kuliner Kami</h2>
        <p class="text-lg mb-8">
        Temukan resep baru, bagikan resep Anda, dan terhubung dengan sesama pecinta makanan.
        </p>
        <a href="/register"
            class="bg-white text-[#C6A969] py-3 px-6 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300">
            Mulai Sekarang
        </a>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 px-6 lg:px-20 bg-white">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold text-gray-800 mb-4">FAQ</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Ada pertanyaan? Kami punya jawaban untuk membantu Anda memulai.
            </p>
        </div>
        <div class="space-y-6">
            <div class="bg-[#F1E4C3] p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Bagaimana cara memulai Flavoury?</h3>
                <p class="text-gray-700">Daftar gratis dan jelajahi berbagai resep dan fitur yang dirancang untuk itu
                pecinta makanan.</p>
            </div>
            <div class="bg-[#F1E4C3] p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Bisakah saya membagikan resep saya sendiri?</h3>
                <p class="text-gray-700">Tentu! Flavoury memungkinkan Anda berbagi dan memperlihatkan resep Anda sendiri.</p>
            </div>
            <div class="bg-[#F1E4C3] p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Apakah Flavoury gratis untuk digunakan?</h3>
                <p class="text-gray-700">Ya, Flavoury menawarkan akses gratis ke sebagian besar fitur. Opsi premium juga
                tersedia untuk alat canggih.</p>
            </div>
        </div>
    </section>

    <x-footer />

</body>

</html>
