<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->name_recipe }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @Vite('resources/css/app.css')

</head>
<body class="bg-[#FFFFEC] text-black">
    <nav class="flex justify-between px-7 py-5">
        <div>
            <!-- <p class="text-2xl font-bold text-black italic">Flavoury</p> -->
            <img src="/storage/FLAVOURY.png" alt="" class="h-8">

        </div>

        <div class="flex space-x-6 text-[20px]">
            <div class="flex hover:border-b-2 border-black">
                <img src="https://img.icons8.com/?size=100&id=i6fZC6wuprSu&format=png&color=000000" alt="Search Icon" class="w-8 h-8 cursor-pointer hover:opacity-80">
                <a href="/" class="">Home</a>
            </div>
            <div class="flex hover:border-b-2 border-black">
                <img src="https://img.icons8.com/?size=100&id=85920&format=png&color=000000" alt="Search Icon" class="w-8 h-8 cursor-pointer hover:opacity-80">
                <a href="/recipe" class="">Recipe</a>
            </div>
            <div class="flex hover:border-b-2 border-black">
                <img src="https://img.icons8.com/?size=100&id=85080&format=png&color=000000" alt="Search Icon" class="w-8 h-8 cursor-pointer hover:opacity-80">
                <a href="/market" class="">Market</a>
            </div>
            <div class="flex hover:border-b-2 border-black">
                <img src="https://img.icons8.com/?size=100&id=1501&format=png&color=000000" alt="Search Icon" class="w-8 h-8 cursor-pointer hover:opacity-80">
                <a href="/addrecipe" class="">Add</a>
            </div>
        </div>

        <div class="flex items-center space-x-3">
            <p>
                <img src="https://img.icons8.com/?size=100&id=59878&format=png&color=000000" alt="Search Icon" class="w-9 h-9 cursor-pointer hover:opacity-80">
            </p>
            <div class="w-9 h-9 rounded-full overflow-hidden hover:scale-110 duration-200 cursor-pointer">
                <img src="/storage/pasta.jpg" alt="Recipe" class="object-cover w-full h-full">
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-6 md:p-10">

        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">{{ $recipe->name_recipe }}</h1>

        <div class="flex justify-center mb-8">
            <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="{{ $recipe->name_recipe }}" class="w-64 h-64 object-cover rounded-lg shadow-md border-2 border-gray-200">
        </div>

        <div class="bg-[#F1E4C3] rounded-lg shadow-lg p-6 md:p-8 max-w-2xl mx-auto">
            <div class="">
                <strong class="text-black">Description:</strong> 
                <p class="text-lg">{{ $recipe->descrip_recipe }}</p>
                <strong class="text-black">Ingredient:</strong> 
                @php
                    $ingredient = explode(',', $recipe->ingredient);
                    $flowCooking = explode(',', $recipe->flow_cooking);
                @endphp
                <ol>
                    @foreach ($ingredient as $i)
                        <li class="list-disc">{{$i}}</li>
                    @endforeach
                </ol>
                <strong class="text-black">Location:</strong>
                <p class="text-lg">{{ $recipe->location }}</p>
                <strong class="text-black">Flow Cooking:</strong>
                <ol>
                    @foreach ($flowCooking as $i)
                        <li class="list-decimal">{{$i}}</li>
                    @endforeach
                </ol>
                <!-- <p class="text-lg"> {{ $recipe->flow_cooking }}</p> -->
            </div>
        </div>

        <div class="text-center mt-10 space-x-10">
            <form action="{{ route('recipe.destroy', $recipe->id_recipe) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this recipe?');" class="bg-black text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-[#FF4B4B] transition duration-300">
                    Delete
                </button>
            </form>
            <a href="{{ route('recipe.edit', $recipe->id_recipe) }}" class="bg-black text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-[#FF4B4B] transition duration-300">Edit</a>
            <!-- <a href="/test" class="bg-black text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-[#FF4B4B] transition duration-300">Edit</a> -->
        </div>

        <div class="text-center mt-10 space-x-10">
            <a href="/" class="bg-black text-white font-semibold px-72 py-3 max-w-2xl w-full rounded-full shadow-lg">Back to Home</a>
        </div>
    </div>
</body>
</html>
