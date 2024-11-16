<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @Vite('resources/css/app.css')

</head>
<body class="bg-gray-100">
    <a href="/dashboard" class="p-10">Home</a>

    <section class="flex flex-col justify-center items-center min-h-screen">
        <div class="flex flex-col justify-center items-center text-center mb-8">
            <img src="https://img.icons8.com/?size=100&id=dlNRF98qYou3&format=png&color=000000" alt="Icon" width="100" height="100">
            <p class="font-semibold text-3xl mt-4">Upload your recipe photo</p>
            <p class="text-xl text-gray-400">Show others your finished dish</p>
        </div>

        @if(session('success'))
            <div class="bg-green-500 text-white text-center p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('recipe.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded shadow-md w-[50%] space-y-3">
            @csrf
            <div class="">
                <label for="name_recipe" class="font-semibold text-gray-700">Name Recipe:</label>
                <textarea id="name_recipe" name="name_recipe" required class="w-full p-2 border-2 rounded border-[#EDA16B]"></textarea>
            </div>

            <div class="">
                <label for="descrip_recipe" class="font-semibold text-gray-700">Description Recipe:</label>
                <textarea id="descrip_recipe" name="descrip_recipe" required class="w-full p-2 border-2 rounded border-[#EDA16B]"></textarea>
            </div>

            <div class="">
                <label for="ingredient" class="font-semibold text-gray-700">Ingredient:</label>
                <textarea id="ingredient" name="ingredient" required class="w-full p-2 border-2 rounded border-[#EDA16B]" placeholder="Note : pisahkan bahan dengan ','"></textarea>
            </div>

            <div class="">
                <label for="location" class="font-semibold text-gray-700">Location:</label>
                <input type="text" id="location" name="location" required class="w-full p-2 border-2 rounded border-[#EDA16B]">
            </div>

            <div class="">
                <label for="flow_cooking" class="font-semibold text-gray-700">Flow Cooking:</label>
                <textarea id="flow_cooking" name="flow_cooking" required class="w-full p-2 border-2 rounded border-[#EDA16B]" placeholder="Note : pisahkan bahan dengan ','"></textarea>
            </div>

            <div class="">
                <label for="image" class="font-semibold text-gray-700">Image Dish:</label>
                <input type="file" id="image" name="image" accept="image/*" class="w-full p-2 border-2 rounded border-[#EDA16B]">
            </div>

            <div class="mt-5">
                <button type="submit" class="bg-[#ee9353] w-full rounded-full text-white py-2 px-4 hover:bg-[#eb8841]">Submit</button>
            </div>
        </form>
    </section>
</body>
</html>
