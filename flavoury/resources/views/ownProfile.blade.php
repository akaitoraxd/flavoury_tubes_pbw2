<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @Vite('resources/css/app.css')

</head>

<body class="bg-[#FFFFEC]">

    <x-navbar />

    <div class="flex flex-col justify-center items-center text-center space-y-7 mt-16 border-b-2 border-[#b8b8b8] pb-7">
        <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
            <img src="{{ asset('storage/images/' . $user->image) }}" alt="Recipe" class="object-cover w-full h-full">
        </div>

        <div>
            <p class="font-semibold text-xl">{{$user->name}}</p>
        </div>

        <div>
            <a href="/profile" class="px-7 py-2 bg-[#F1E4C3] rounded-full">Edit Profile</a>
        </div>

        <div class="flex justify-center gap-3">
            <p data-section="created"
                class="tab-link active hover:border-b-4 hover:border-black text-[18px] border-b-4 border-transparent cursor-pointer">
                Created</p>
            <p data-section="saved"
                class="tab-link hover:border-b-4 hover:border-black text-[18px] border-b-4 border-transparent cursor-pointer">
                saved</p>
        </div>
    </div>

    <!-- Created -->
    <div id="created-section" class="w-full flex justify-center px-1 gap-7 my-7 ">
        <!-- card resep -->
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
            <div class="flex flex-wrap gap-1 justify-center overflow-hidden">
                @foreach ($recipes as $recipe)
                    <a href="{{ route('recipe.show', $recipe->id_recipe) }}"
                        class="group relative w-[100px] h-[100px] sm:w-[250px] sm:h-[250px] bg-white rounded-lg shadow-md hover:shadow-lg duration-300">
                        <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="{{ $recipe->name_recipe }}"
                            class="w-full h-[85%] object-cover rounded-t-lg">

                        <div class="px-2 sm:py-2 py-0">
                            <h3 class="text-[10px] sm:text-sm font-semibold text-gray-800 truncate">{{ $recipe->name_recipe }}
                            </h3>
                        </div>
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-300 group-hover:rounded-lg flex items-center justify-center text-white text-sm font-medium">
                            View Recipe
                        </div>
                    </a>
                @endforeach

                <a href="/addrecipe"
                    class="relative w-[100px] h-[100px] sm:w-[250px] sm:h-[250px] flex-shrink-0 bg-gray-200 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-300 duration-300">
                    <p class="text-gray-800 font-semibold text-lg">+</p>
                </a>
            </div>
        @endif
    </div>


    <!-- Saved -->
    <div id="saved-section" class="hidden w-full flex justify-center px-1 gap-7 my-7 ">
        <!-- card resep -->
        @if($saved->isEmpty())
            <div class="flex flex-col justify-center text-center space-y-5">
                <div>
                    <p>No Collection</p>
                </div>
            </div>
        @else
            <div class="flex flex-wrap gap-1 justify-center overflow-hidden">
                @foreach ($saved as $recipe)
                    <a href="{{ route('showRecipe', $recipe->id_recipe) }}"
                        class="group relative w-[100px] h-[100px] sm:w-[250px] sm:h-[250px] bg-white rounded-lg shadow-md hover:shadow-lg duration-300">
                        <img src="{{ asset('storage/images/' . $recipe->image) }}" alt="{{ $recipe->name_recipe }}"
                            class="w-full h-[85%] object-cover rounded-t-lg">

                        <div class="px-2 sm:py-2 py-0">
                            <h3 class="text-[10px] sm:text-sm font-semibold text-gray-800 truncate">{{ $recipe->name_recipe }}
                            </h3>
                        </div>
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-300 group-hover:rounded-lg flex items-center justify-center text-white text-sm font-medium">
                            View Recipe
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll(".tab-link");
            const sections = {
                created: document.getElementById("created-section"),
                saved: document.getElementById("saved-section"),
            };

            tabs.forEach(tab => {
                tab.addEventListener("click", function () {
                    const sectionToShow = this.dataset.section;

                    tabs.forEach(t => {
                        t.classList.remove("border-black", "font-bold");
                        t.classList.add("border-transparent", "font-normal");
                    });
                    this.classList.remove("border-transparent", "font-normal");
                    this.classList.add("border-black", "font-bold");

                    Object.keys(sections).forEach(key => {
                        if (key === sectionToShow) {
                            sections[key].classList.remove("hidden");
                        } else {
                            sections[key].classList.add("hidden");
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>