<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->name_recipe }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFFFEC] text-black">
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
                <p class="text-lg">{{ $recipe->ingredient }}</p>
                <strong class="text-black">Location:</strong>
                <p class="text-lg">{{ $recipe->location }}</p>
                <strong class="text-black">Flow Cooking:</strong>
                <p class="text-lg"> {{ $recipe->flow_cooking }}</p>
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
