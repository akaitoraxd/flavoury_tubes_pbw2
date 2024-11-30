<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>{{ $recipe->name_recipe }}</title>
    @Vite('resources/css/app.css')

</head>

<script>
    function onSubmitTest(form) {
        event.preventDefault();
        console.log($(form).serializeArray());
    }
</script>

<body class="bg-[#FFFFEC] text-black">

    <x-navbar />
    <div class="p-6 md:p-10">

        <h1 class="text-5xl font-bold text-start text-gray-800 mb-6">{{ $recipe->name_recipe }}</h1>

        <div class="flex justify-between">
            <div class="flex flex-col sm:flex-row space-x-7">

                <div class="flex space-x-2">
                    <img src="{{ asset('storage/images/' . auth()->user()->image) }}" alt=""
                        class="h-7 w-7 rounded-full object-cover">
                    <p class="font-semibold">{{auth()->user()->name}}</p>
                </div>

                <div>
                    <p class="font-semibold">Location : {{ $recipe->location }}</p>
                </div>

                <div class="flex items-center">
                    <!-- Star 1 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 2 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 3 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 4 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 5 -->
                    <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                </div>
            </div>

        </div>

        <hr class="border-black my-7">

        <p class="text-xl my-7">{{ $recipe->descrip_recipe }}</p>


        <div class="flex justify-center mb-8">
            <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="{{ $recipe->name_recipe }}"
                class="w-full h-[650px] object-cover rounded-lg shadow-md border-2 border-gray-200">
        </div>

        @php
            $ingredient = explode(',', $recipe->ingredient);
            $flowCooking = explode(',', $recipe->flow_cooking);
        @endphp
        <div class="flex flex-col md:flex-row p-6">
            <div class="w-full md:w-1/2 h-auto p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Ingredients</h1>
                <ol class="list-disc pl-5  text-gray-600 space-y-2">
                    @foreach ($ingredient as $i)
                        <li>{{ $i }}</li>
                    @endforeach
                </ol>
            </div>

            <div class="w-full md:w-1/2 h-auto p-6 ">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Instructions</h1>
                <ol class="list-decimal pl-5 text-gray-600 space-y-2">
                    @foreach ($flowCooking as $i)
                        <li class="">{{ $i }}</li>
                    @endforeach
                </ol>
            </div>
        </div>

        <!-- coment -->

        <h1 class="text-5xl font-semibold pt-5 border-t-8 border-black">Already made this?</h1>
        <p class="text-3xl">Share your coment?</p>

        <form action="" onsubmit="onSubmitTest(this);" class="w-full mx-auto p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center mb-6">Beri Rating & Komentar</h2>

            <!-- Input Komentar -->
            <div class="mb-4">
                <label for="comment" class="block text-gray-700 font-medium mb-2">Komentar</label>
                <textarea id="comment" name="comment" rows="2"
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Tulis komentar anda..."></textarea>
            </div>

            <!-- Input Rating -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Rating</label>
                <div class="flex space-x-2 text-2xl">
                    <!-- Bintang 1 -->
                    <span class="cursor-pointer text-gray-300 hover:text-yellow-400" data-rating="1">★</span>
                    <!-- Bintang 2 -->
                    <span class="cursor-pointer text-gray-300 hover:text-yellow-400" data-rating="2">★</span>
                    <!-- Bintang 3 -->
                    <span class="cursor-pointer text-gray-300 hover:text-yellow-400" data-rating="3">★</span>
                    <!-- Bintang 4 -->
                    <span class="cursor-pointer text-gray-300 hover:text-yellow-400" data-rating="4">★</span>
                    <!-- Bintang 5 -->
                    <span class="cursor-pointer text-gray-300 hover:text-yellow-400" data-rating="5">★</span>
                </div>
                <!-- Input tersembunyi untuk nilai rating -->
                <input type="hidden" id="rating" name="rating" value="0">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-[#C6A969] text-white py-3 rounded-md hover:bg-[#B89054] focus:outline-none focus:ring-2 focus:ring-blue-500">Kirim</button>
        </form>

        <div class="w-full mx-auto mt-6 p-6 ">
            <h3 class="text-3xl font-bold mb-4">Komentar Pengguna</h3>

            <div class="border-b pb-4 mb-4">
                <div class="flex space-x-2">
                    <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="Profile" class="w-7 h-7 rounded-full object-cover inline-block">
                    <p class="font-semibold">John Doe</p>
                </div>
                <div class="flex space-x-1 text-yellow-400 text-lg">
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-gray-300">★</span>
                </div>
                <p class="text-gray-700 mt-2">Makanan enak banget! Pelayanannya cepat dan ramah. Pasti akan kembali
                    lagi.</p>
            </div>

            <div class="border-b pb-4 mb-4">
                <div class="flex space-x-2">
                    <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="Profile" class="w-7 h-7 rounded-full object-cover inline-block">
                    <p class="font-semibold">John Doe</p>
                </div>

                <div class="flex space-x-1 text-yellow-400 text-lg">
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-gray-300">★</span>
                    <span class="text-gray-300">★</span>
                </div>
                <p class="text-gray-700 mt-2">Cukup baik, tapi ada beberapa aspek yang perlu ditingkatkan, seperti
                    kecepatan layanan.</p>
            </div>

            <div class="border-b pb-4 mb-4">
                <div class="flex space-x-2">
                    <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="Profile" class="w-7 h-7 rounded-full object-cover inline-block">
                    <p class="font-semibold">John Doe</p>
                </div>

                <div class="flex space-x-1 text-yellow-400 text-lg">
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                    <span class="text-yellow-400">★</span>
                </div>
                <p class="text-gray-700 mt-2">Sangat memuaskan! Layanan cepat dan produk sangat berkualitas.</p>
            </div>

        </div>

    </div>
    <script>
        // Menambahkan event listener untuk setiap bintang
        const stars = document.querySelectorAll('.cursor-pointer');
        const ratingInput = document.getElementById('rating');

        stars.forEach(star => {
            star.addEventListener('click', (e) => {
                const rating = e.target.getAttribute('data-rating'); // Mengambil nilai rating dari data-rating
                ratingInput.value = rating; // Set nilai rating ke input tersembunyi
                highlightStars(rating); // Menyorot bintang yang dipilih
            });

            // Event listener untuk hover (menampilkan highlight sementara)
            star.addEventListener('mouseover', (e) => {
                const rating = e.target.getAttribute('data-rating');
                highlightStarsTemporary(rating);
            });

            // Mengembalikan ke kondisi awal setelah mouse keluar
            star.addEventListener('mouseout', () => {
                const currentRating = ratingInput.value;
                highlightStars(currentRating);
            });
        });

        // Fungsi untuk menyorot bintang yang dipilih
        function highlightStars(rating) {
            stars.forEach(star => {
                if (parseInt(star.getAttribute('data-rating')) <= rating) {
                    star.classList.add('text-yellow-400'); // Menyorot bintang yang dipilih
                    star.classList.remove('text-gray-300'); // Menghapus warna abu-abu pada bintang yang dipilih
                } else {
                    star.classList.remove('text-yellow-400'); // Menghapus sorotan pada bintang yang tidak dipilih
                    star.classList.add('text-gray-300'); // Menambahkan warna abu-abu pada bintang yang tidak dipilih
                }
            });
        }

        // Fungsi untuk menyorot bintang sementara saat hover
        function highlightStarsTemporary(rating) {
            stars.forEach(star => {
                if (parseInt(star.getAttribute('data-rating')) <= rating) {
                    star.classList.add('text-yellow-400');
                }
            });
        }
    </script>
</body>

</html>