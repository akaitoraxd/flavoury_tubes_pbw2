<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->name_recipe }}</title>
    @Vite('resources/css/app.css')

</head>

<body class="bg-[#FFFFEC] text-black">

    <x-navbar />
    <div class="p-6 md:p-10">

        <h1 class="text-5xl font-bold text-start text-gray-800 mb-6">{{ $recipe->name_recipe }}</h1>

        <div class="flex justify-between items-center">
            <div class="flex flex-col sm:flex-row space-x-7">

                <div class="flex space-x-2">
                    <img src="{{ asset('storage/images/' . $user->image) }}" alt="Profile"
                        class="h-7 w-7 rounded-full object-cover">
                    <p class="font-semibold">{{ $user->name }}</p>
                </div>

                <div>
                    <p class="font-semibold">Location: {{ $recipe->location }}</p>
                </div>

                <div class="flex items-center">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-6 h-6 {{ $i <= $recipe->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                        </svg>
                    @endfor
                </div>

            </div>

            <div class="flex gap-x-1">
                <form action="{{ route('collections.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_recipe" value="{{ $recipe->id_recipe }}">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">
                        Save Recipe
                    </button>
                </form>
                <form action="{{ route('collections.destroy', $recipe->id_recipe) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to remove this recipe from your collection?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">
                        Remove from Collection
                    </button>
                </form>
                @if(session('success'))
                    <div class="absolute righ-1 top-36">
                        {{ session('success') }}
                    </div>
                @endif

            </div>

        </div>


        <hr class="border-black my-7">

        <p class="text-xl my-7 break-words">{{ $recipe->descrip_recipe }}</p>


        <div class="flex justify-center mb-8">
            <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="{{ $recipe->name_recipe }}"
                class="w-full h-[650px] object-cover rounded-lg shadow-md border-2 border-gray-200">
        </div>

        @if ($user->phone_number != 0)
            <p class="font-medium text-gray-800 text-lg md:text-xl flex items-center space-x-2">
                <span>Klik untuk info private class:</span>
                <a href="https://wa.me/{{$user->phone_number}}" target="_blank"
                    class="text-[#eec04b] hover:text-[#3b3830] font-semibold flex items-center space-x-1">
                    <span>{{$user->phone_number}}</span>
                </a>
        </p> @endif

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

        <form action="{{ route('comment.store') }}" method="POST" class="w-full mx-auto p-6 rounded-lg shadow-md">
            @csrf
            <h2 class="text-2xl font-bold text-center mb-6">Beri Rating & Komentar</h2>

            <input type="hidden" name="id_recipe" value="{{ $recipe->id_recipe }}">

            <div class="mb-4">
                <label for="comment" class="block text-gray-700 font-medium mb-2">Komentar</label>
                <textarea id="comment" name="comment" rows="2"
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Tulis komentar anda..." required></textarea>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Rating</label>
                <div class="flex space-x-2 text-2xl">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="cursor-pointer text-gray-300 hover:text-yellow-400" data-rating="{{ $i }}">★</span>
                    @endfor
                </div>
                <input type="hidden" id="rating" name="rating" value="0">
            </div>

            <button type="submit"
                class="w-full bg-[#C6A969] text-white py-3 rounded-md hover:bg-[#B89054] focus:outline-none focus:ring-2 focus:ring-blue-500">Kirim</button>
        </form>

        <!-- commentar pengguna -->
        <div class="w-full mx-auto mt-6 p-6 ">
            <h3 class="text-3xl font-bold mb-4">Komentar Pengguna</h3>

            @foreach ($comments as $comment)
                <div class="border-b pb-4 mb-4">
                    <div class="flex space-x-2">
                        <img src="{{ asset('storage/images/' . $comment->image) }}" alt="Profile"
                            class="w-7 h-7 rounded-full object-cover inline-block">
                        <p class="font-semibold">{{ $comment->name }}</p>
                    </div>

                    <div class="flex space-x-1 text-yellow-400 text-lg">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="{{ $i <= $comment->rating ? 'text-yellow-400' : 'text-gray-300' }}">★</span>
                        @endfor
                    </div>

                    <p class="text-gray-700 mt-2">{{ $comment->comment }}</p>
                </div>
            @endforeach
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