<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    @Vite('resources/css/app.css')
</head>

<body class="bg-[#FFFFEC] gap-y-7">
    <div>
        <img src="/storage/FLAVOURY.png" alt="" class="h-8 mx-auto mt-7">
    </div>

    <x-navbarRecipe></x-navbarRecipe>

    <div class="flex justify-center mx-0 sm:mx-28 sm:justify-between gap-x-4 overflow-hidden">
        <!-- card -->
        @foreach ($top3 as $resep)

            <a href="{{ route('showRecipe', $resep->id_recipe) }}" class="w-[30%] h-auto bg-transparent space-y-1 mt-10">
                <img src="{{ asset('storage/images/' . $resep->image) }}" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-6 h-6 {{ $i <= $resep->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                        </svg>
                    @endfor
                </div>
                <div class="feature-header flex justify-between items-center">
                    <h3 class="text-lg text-gray-800 font-semibold">{{$resep->name_recipe}}</h3>
                </div>
            </a>
        @endforeach

    </div>


    <div class="px-10 space-y-6">
        <h1 class="text-4xl font-semibold my-10 text-center text-gray-800">Resep Terbaru</h1>

        @foreach ($new5 as $resep)
            <div class="w-full bg-[#F1E4C3] rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="{{ route('showRecipe', $resep->id_recipe) }}">

                    <div class="flex items-center p-4">
                        <img src="{{ asset('storage/images/' . $resep->image) }}"
                            class="sm:w-24 md:w-40 lg:w-80 sm:h-32 md:h-48 lg:h-64 object-cover rounded-md shadow-lg">

                        <div class="ml-4 flex-1 overflow-hidden">
                            <div class="flex items-center space-x-1 mb-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-6 h-6 {{ $i <= $resep->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                                    </svg>
                                @endfor
                            </div>

                            <h3 class="text-lg text-gray-800 font-semibold truncate">{{$resep->name_recipe}}</h3>

                            <p class="text-gray-600 mt-2 text-sm line-clamp-3 break-words ">
                                {{ $resep->descrip_recipe }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


    <h1 class="text-4xl font-semibold mt-10 ml-10">Semua Resep</h1>
    <div class="flex flex-wrap justify-center gap-x-4 gap-y-4 mx-0 sm:mx-28 mb-10 overflow-hidden">
        @foreach ($allRecipes as $recipe)

            <a href="{{ route('showRecipe', $recipe->id_recipe) }}" class="w-[30%] h-auto bg-transparent space-y-1 mt-10">
                <img src="{{ asset('storage/images/' . $recipe->image) }}" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-6 h-6 {{ $i <= $recipe->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                        </svg>
                    @endfor
                </div>
                <div class="feature-header flex justify-between items-center">
                    <h3 class="text-lg text-gray-800 font-semibold">{{$recipe->name_recipe}}</h3>
                </div>
            </a>
        @endforeach
    </div>


    <x-footer></x-footer>

</body>

</html>