<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @Vite('resources/css/app.css')
    <style>
        .book:hover .cover {
        transform: rotateY(-80deg);
    }
    </style>
</head>
<body class="bg-[#FFFFEC]">
    
    <x-navbar/>
    <x-feedback/>

    <a href="{{ route('showRecipe', $random1[0]->id_recipe) }}" class="flex flex-col md:flex-row h-auto md:h-96 mx-4 md:mx-20 bg-[#F1E4C3] rounded-md mt-8 md:mt-16">
        <div class="w-full md:w-1/2 h-64 md:h-full overflow-hidden rounded-t-md md:rounded-l-md">
            <img src="{{ asset('storage/images/' . $random1[0]->image) }}" alt="Recipe" class="object-cover w-full h-full">
        </div>

        <div class="w-full md:w-1/2 h-auto md:h-full flex flex-col p-6 md:p-20 space-y-4 overflow-auto">
            <h1 class="text-3xl md:text-5xl font-bold">{{$random1[0]->name_recipe}}</h1>
            <p class="text-sm md:text-base break-words">
                {{ $random1[0]->descrip_recipe }}
            </p>
        </div>

    </a>

    <section class="py-12">
    <h2 class="text-3xl font-bold mb-8 text-center sm:text-left sm:ml-32">Resep Terbaru</h2>

        <div class="flex flex-wrap justify-center items-center space-x-6">
            @foreach ($newRecipe as $resep)
            <a href="{{ route('showRecipe', $resep->id_recipe) }}" class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
                    <img src="{{ asset('storage/images/' . $resep->image) }}" alt="Cake" class="object-cover w-full h-full">
                </div>
                <p class="font-semibold text-2xl mt-2">{{$resep -> name_recipe}}</p>
            </a>
            @endforeach
        </div>
    </section>

    <section class="py-12">
        <h1 class="font-bold text-3xl ml-32">Rating Tertiinggi</h1>
        <div class="flex justify-center mx-0 sm:mx-28 sm:justify-between gap-x-4">
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
                    <h3 class="text-lg text-gray-800 font-semibold">{{ $resep->name_recipe }}</h3>
                </div>
            </a>
            @endforeach
        
        </div>

        <div class="flex flex-wrap justify-center items-start gap-x-10 gap-y-7 mt-28">
        @foreach ($random5 as $resep)
            <div class="book relative w-[260px] h-[350px] rounded-[15px] bg-[#fffefe] shadow-[1px_1px_12px_#000] flex items-center justify-center text-black text-center" style="perspective: 2000px;">            
                <div class="cover absolute top-0 z-[1] w-full h-full bg-cover bg-center origin-left rounded-[15px] flex flex-col justify-end transition-transform duration-700 ease-in-out hover:transform-[rotateY(-80deg)]" style="background-image: url('{{ asset('storage/images/' . $resep->image) }}');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent rounded-[15px]"></div>
                    <div class="relative z-10 p-4 text-right">
                        <h1 class="text-white drop-shadow-md text-2xl font-bold">
                            {{$resep->name_recipe}}
                        </h1>
                    </div>
                </div>

                <div class="absolute w-full h-full flex flex-col items-center justify-center px-4 bg-[#F1E4C3] rounded-[15px] p-6 transform rotateY-180 backface-hidden shadow-inner">
                    <p class="w-full text-sm text-gray-800 leading-relaxed text-center overflow-hidden mb-4" style="display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; word-wrap: break-word; overflow: hidden;">
                        {{$resep->descrip_recipe}}
                    </p>
                    <a href="{{ route('showRecipe', $resep->id_recipe) }}" class="bg-transparent border-2 border-black text-black text-sm font-semibold rounded-lg px-4 py-2 hover:bg-black hover:text-white transition duration-300">
                        View Recipe
                    </a>
                </div>

            </div>
            @endforeach
        </div>
    </section>

    <x-footer/>
    
</body>
</html>