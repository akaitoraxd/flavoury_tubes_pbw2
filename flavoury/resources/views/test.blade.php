<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @Vite('resources/css/app.css')

</head>
<body class="bg-[#FFFFEC]">
    <div class="flex flex-col justify-center items-center text-center space-y-7 mt-16 border-b-2 border-[#b8b8b8] pb-7">
        <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
             <img src="/storage/pasta.jpg" alt="Recipe" class="object-cover w-full h-full">
        </div>

        <div>
            <p class="font-semibold text-xl">Username</p>
        </div>

        <div>
            <a href="/profile" class="px-7 py-2 bg-[#F1E4C3] rounded-full">Edit Profile</a>
        </div>

        <div class="flex justify-center gap-3">
            <p class="hover:border-b-4 hover:border-black text-[18px] border-b-4 border-transparent cursor-pointer">Created</p>
            <p class="hover:border-b-4 hover:border-black text-[18px] border-b-4 border-transparent cursor-pointer">saved</p>
        </div>
    </div>

    <div class="w-full flex flex-wrap justify-center px-20 gap-7 my-20 ">

        @if($recipes->isEmpty())
            <div class="flex flex-col justify-center text-center space-y-5">
                <div>
                    <p>No recipes</p>
                </div>
                <div>
                    <a href="/addrecipe" class="py-3 px-7 bg-black text-white rounded-full">add Recipe</a>
                </div>
            </div>
        @else
            @foreach ($recipes as $recipe)
            <a href="{{ route('recipe.show', $recipe->id_recipe) }}" class="w-80 bg-transparent space-y-1 border-black border-2 rounded-lg">
                <img src="{{ asset('storage/images/' . $recipe->image) }}" class="w-full h-64 object-cover rounded-t-md">
                <div class="text-center">
                    <h3 class="text-lg text-gray-800 font-semibold">{{ $recipe->name_recipe }}</h3>
                </div>
            </a>
            @endforeach
        @endif
        
    </div>


</body>
</html>
