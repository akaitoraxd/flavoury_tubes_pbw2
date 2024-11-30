<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFFFEC]">

    <x-navbar />

    <div class="mx-4 sm:mx-8 md:mx-16 my-7 flex justify-between border-b-2 border-black pb-7">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold mb-4">Hasil Pencarian</h1>
        <form action="pencarian" method="GET">
            <input type="text" name="search" placeholder="Cari resep..." autocomplete="off">
            <button type="submit">Cari</button>
        </form>

    </div>

    <section class="py-12 mb-10">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 sm:gap-8 justify-center items-center">
            @foreach($pencarian as $recipe)
                <a href="" class="flex flex-col items-center">
                    <div class="w-56 h-56 rounded-full overflow-hidden hover:scale-110 duration-200">
                        <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="{{ $recipe->name_recipe }}"
                            class="object-cover w-full h-full">
                    </div>
                    <p class="font-semibold text-2xl mt-2">{{ $recipe->name_recipe }}</p>
                </a>
            @endforeach
        </div>
    </section>

    <x-footer />

</body>

</html>