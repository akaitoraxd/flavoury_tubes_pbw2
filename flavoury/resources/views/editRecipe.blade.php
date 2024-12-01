<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $recipe->name_recipe }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @Vite('resources/css/app.css')

</head>

<body class="bg-[#FFFFEC] text-black">
    <div class="mt-10 ml-10">
        <a href="/ownProfile"
            class="bg-[#C6A969] text-black py-2 px-6 rounded-md border border-black hover:bg-[#B89054] hover:shadow-lg shadow-[4px_4px_0px_rgba(105,63,35,0.7)] transition-all duration-300">
            Back to Profile
        </a>
    </div>
    <div class="container mx-auto p-6 md:p-10">
        <h1 class="text-3xl font-bold text-center mb-6">Edit Recipe</h1>

        <form action="{{ route('recipe.update', $recipe->id_recipe) }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label for="name_recipe" class="block text-gray-700 font-semibold">Name Recipe:</label>
                <input type="text" id="name_recipe" name="name_recipe"
                    value="{{ old('name_recipe', $recipe->name_recipe) }}" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="descrip_recipe" class="block text-gray-700 font-semibold">Description Recipe:</label>
                <textarea id="descrip_recipe" name="descrip_recipe" class="w-full p-2 border rounded"
                    required>{{ old('descrip_recipe', $recipe->descrip_recipe) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="ingredient" class="block text-gray-700 font-semibold">Ingredient:</label>
                <textarea id="ingredient" name="ingredient" class="w-full p-2 border rounded"
                    required>{{ old('ingredient', $recipe->ingredient) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-semibold">Location:</label>
                <input type="text" id="location" name="location" value="{{ old('location', $recipe->location) }}"
                    class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="flow_cooking" class="block text-gray-700 font-semibold">Flow Cooking:</label>
                <textarea id="flow_cooking" name="flow_cooking" class="w-full p-2 border rounded"
                    required>{{ old('flow_cooking', $recipe->flow_cooking) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold">Change Image:</label>
                <input type="file" id="image" name="image" class="w-full p-2 border rounded">
                @if($recipe->image)
                    <p class="text-sm text-gray-500 mt-2">Current Image:</p>
                    <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="Current Image"
                        class="w-32 h-32 object-cover mt-2">
                @endif
            </div>

            <button type="submit"
                class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 w-full">Update
                Recipe</button>
        </form>
    </div>
</body>

</html>