<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @Vite('resources/css/app.css')
</head>

<body class="bg-[#FFFFEC] gap-y-7">
    <div>
        <img src="/storage/FLAVOURY.png" alt="" class="h-8 mx-auto mt-7">
    </div>

    <x-navbarRecipe></x-navbarRecipe>

    <section class="py-12 mx-28">
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

    <section class="px-10">
        <h1 class="text-4xl font-semibold mb-10">Resep Terbaru</h1>

        <div class="flex justify-between w-full">
            <div >
                <img src="storage/image1.png" class="w-80 h-64 object-cover rounded-t-md">
            </div>
    
            <div >
                <img src="storage/image1.png" class="w-80 h-64 object-cover rounded-t-md">
            </div>
    
            <div >
                <img src="storage/image1.png" class="w-80 h-64 object-cover rounded-t-md">
            </div>
        </div>

    </section>

</body>

</html>