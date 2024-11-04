<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFFFEC]">
    <nav class="flex justify-between px-7 py-5 ">
        <div>
            <p class="text-2xl font-bold text-black italic">Flavoury</p>
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

    <div class="flex h-96 mx-20 bg-[#F1E4C3] rounded-md mt-16">
        <div class="w-1/2 h-full  overflow-hidden rounded-l-md">
            <img src="/storage/pasta.jpg" alt="Recipe" class="object-cover w-full h-full">
        </div>

        <div class="w-1/2 h-full flex flex-col p-20 space-y-4">
            <h1 class="text-5xl font-bold">Martabak</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab placeat facilis, cum nulla ad nemo quae consequatur cumque laboriosam distinctio illum. Officiis magni consequatur voluptas exercitationem iure quaerat placeat perspiciatis.</p>
        </div>
    </div>

    <section class="py-12">
        <h2 class="text-3xl font-bold mb-8 ml-32">Kategori Teratas</h2>
        <div class="flex flex-wrap justify-center items-center space-x-6">
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
                    <img src="/storage/pasta.jpg" alt="Cake" class="object-cover w-full h-full">
                </div>
                <p class="font-semibold text-2xl mt-2">Cake</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
                    <img src="/storage/pasta.jpg" alt="Cake" class="object-cover w-full h-full">
                </div>
                <p class="font-semibold text-2xl mt-2">Cake</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
                    <img src="/storage/pasta.jpg" alt="Cake" class="object-cover w-full h-full">
                </div>
                <p class="font-semibold text-2xl mt-2">Cake</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
                    <img src="/storage/pasta.jpg" alt="Cake" class="object-cover w-full h-full">
                </div>
                <p class="font-semibold text-2xl mt-2">Cake</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
                    <img src="/storage/pasta.jpg" alt="Cake" class="object-cover w-full h-full">
                </div>
                <p class="font-semibold text-2xl mt-2">Cake</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-48 h-48 rounded-full overflow-hidden hover:scale-110 duration-200">
                    <img src="/storage/pasta.jpg" alt="Cake" class="object-cover w-full h-full">
                </div>
                <p class="font-semibold text-2xl mt-2">Cake</p>
            </div>
        </div>
    </section>

    <section class="py-12">
        <h1 class="font-bold text-3xl ml-32">Paling Nikmat</h1>
        <div class="flex flex-wrap justify-center items-start gap-x-20">
            <!-- card -->
            <div class="feature w-80 bg-transparent space-y-1 mt-10">
            <img src="storage/image1.png" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center">
                    <!-- Star 1 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 2 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 3 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 4 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 5 -->
                    <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                </div>
                <div class="feature-header flex justify-between items-center">
                    <h3 class="text-lg text-gray-800 font-semibold">NASI GORENG</h3>
                </div>
            </div>
            <!-- card -->
            <div class="feature w-80 bg-transparent space-y-1 mt-10">
            <img src="storage/image1.png" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center">
                    <!-- Star 1 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 2 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 3 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 4 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 5 -->
                    <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                </div>
                <div class="feature-header flex justify-between items-center">
                    <h3 class="text-lg text-gray-800 font-semibold">NASI GORENG</h3>
                </div>
            </div>
            <!-- card -->
            <div class="feature w-80 bg-transparent space-y-1 mt-10">
            <img src="storage/image1.png" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center">
                    <!-- Star 1 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 2 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 3 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 4 -->
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                    <!-- Star 5 -->
                    <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.562 4.787h5.034c.969 0 1.371 1.24.588 1.81l-4.075 2.958 1.563 4.788c.3.921-.755 1.688-1.538 1.156L10 14.347l-4.075 2.959c-.783.532-1.838-.235-1.538-1.156l1.563-4.788-4.075-2.958c-.783-.57-.381-1.81.588-1.81h5.034l1.562-4.787z" />
                    </svg>
                </div>
                <div class="feature-header flex justify-between items-center">
                    <h3 class="text-lg text-gray-800 font-semibold">NASI GORENG</h3>
                </div>
            </div>
            
            
        </div>
    </section>
    
</body>
</html>