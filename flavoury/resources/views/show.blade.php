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

        <div class="flex justify-between">
            <div class="flex flex-col sm:flex-row space-x-7">

                <div class="flex space-x-2">
                    <img src="{{ asset('storage/images/' . auth()->user()->image) }}" alt=""
                        class="h-7 w-7 rounded-full object-cover">
                    <p class="font-semibold">{{ auth()->user()->name }}</p>
                </div>

                <div>
                    <p class="font-semibold">Location: {{ $recipe->location }}</p>
                </div>

                <div class="flex items-center">
                    <!-- Rating Stars -->
                    @php
                        $rating = $recipe->rating;  // Nilai rating yang disimpan dalam database, misalnya 4
                        $maxRating = 5;  // Nilai maksimum bintang (5)
                    @endphp

                    @for ($i = 1; $i <= $maxRating; $i++)
                        <svg class="w-6 h-6 {{ $i <= $rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                        </svg>
                    @endfor
                </div>
            </div>

            <div class="flex">
                <details class="group">
                    <summary class="cursor-pointer list-none">&#10247;</summary>
                    <ul
                        class="absolute mt-2 w-48 bg-[#F1E4C3] border border-[#c3b89e] rounded-md shadow-lg group-open:block hidden right-1">
                        <li class="px-4 py-2 hover:bg-[#C6A969]"><a
                                href="{{ route('recipe.edit', $recipe->id_recipe) }}">edit</a></li>
                        <li class="px-4 py-2 hover:bg-[#C6A969]">
                            <form action="{{ route('recipe.destroy', $recipe->id_recipe) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this recipe?');">
                                    Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </details>
            </div>
        </div>

        <hr class="border-black my-7">

        <p class="text-xl my-7 break-words">{{ $recipe->descrip_recipe }}</p>

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
                <ol class="list-disc pl-5 text-gray-600 space-y-2">
                    @foreach ($ingredient as $i)
                        <li>{{ $i }}</li>
                    @endforeach
                </ol>
            </div>

            <div class="w-full md:w-1/2 h-auto p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Instructions</h1>
                <ol class="list-decimal pl-5 text-gray-600 space-y-2">
                    @foreach ($flowCooking as $i)
                        <li>{{ $i }}</li>
                    @endforeach
                </ol>
            </div>
        </div>

        <hr class="my-7 border-black">

        <!-- Display comments (if any) -->
        <div class="space-y-4">
            <h2 class="text-2xl font-bold">Comments</h2>
            @foreach ($recipe->comments as $comment)
                <div class="border-b pb-4 mb-4">
                    <!-- Foto Profil dan Nama Pengguna -->
                    <div class="flex space-x-2">
                        <img src="{{ asset('storage/images/' . $comment->user->image) }}" alt="Profile"
                            class="w-7 h-7 rounded-full object-cover inline-block">
                        <p class="font-semibold">{{ $comment->user->name }}</p>
                    </div>

                    <!-- Rating -->
                    <div class="flex space-x-1 text-yellow-400 text-lg">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="{{ $i <= $comment->rating ? 'text-yellow-400' : 'text-gray-300' }}">★</span>
                        @endfor
                    </div>

                    <!-- Komentar -->
                    <p class="text-gray-700 mt-2">{{ $comment->comment }}</p>
                </div>
            @endforeach
        </div>

    </div>
</body>

</html>