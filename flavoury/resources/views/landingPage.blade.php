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
    <section class="h-screen flex flex-col justify-center items-center bg-[#FFFFEC] relative">
        <div class="absolute top-0 left-0 right-0 flex justify-center bg-[#FFFFEC] z-10">
            <h1 class="text-5xl font-bold text-black">Flavoury</h1>
        </div>
        <div class="absolute top-0 left-0 right-0 mt-20 flex justify-center space-x-5 font-bold text-2xl z-10">
            <a href="">Home</a>
            <a href="">Feature</a>
            <a href="">Market</a>
            <a href="">About Us</a>
        </div>
        
        <!-- Carousel Section -->
        <div class="relative w-full h-full flex items-center justify-center overflow-hidden bottom-0">
            <!-- Carousel Images -->
            <div class="absolute w-full h-[80%] bottom-0">
                <img src="/storage/cooking.jpg" alt="carousel" class="carousel-image w-full h-full object-cover hidden">
                <img src="/storage/ayamgoreng.png" alt="carousel" class="carousel-image w-full h-full object-cover hidden">
                <img src="/storage/martabak.png" alt="carousel" class="carousel-image w-full h-full object-cover hidden">
            </div>
            
            <!-- Navigation Arrows -->
            <div onclick="prevSlide()" class="absolute left-0 top-[60%] py-1 px-4 bg-black rounded-full transform -translate-y-1/2 text-4xl text-white cursor-pointer z-20 ml-4">&#10094;</div>
            <div onclick="nextSlide()" class="absolute right-0 top-[60%] py-1 px-4 bg-black rounded-full transform -translate-y-1/2 text-4xl text-white cursor-pointer z-20 mr-4">&#10095;</div>
        </div>        
    </section>

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
            <!-- card 1 -->
            <div class="feature w-80 bg-transparent border-[#C6A969] border rounded-md space-y-3 mt-10">
            <img src="storage/image1.png" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center pl-7">
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
                <div class="feature-header flex justify-between items-center pl-7">
                    <h3 class="text-lg text-gray-800 font-bold">NASI GORENG</h3>
                </div>
                <div class="flex space-x-3 pl-7 pb-20">
                    <img src="/storage/cooking.jpg" alt="" class="h-7 w-7 rounded-full object-cover">
                    <p class="font-semibold">Spongebob</p>
                </div>
            </div>
            <!-- card 1 -->
            <div class="feature w-80 bg-transparent border-[#C6A969] border rounded-md space-y-3 mt-10">
            <img src="storage/image1.png" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center pl-7">
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
                <div class="feature-header flex justify-between items-center pl-7">
                    <h3 class="text-lg text-gray-800 font-bold">NASI GORENG</h3>
                </div>
                <div class="flex space-x-3 pl-7 pb-20">
                    <img src="/storage/cooking.jpg" alt="" class="h-7 w-7 rounded-full object-cover">
                    <p class="font-semibold">Spongebob</p>
                </div>
            </div>
            <!-- card 1 -->
            <div class="feature w-80 bg-transparent border-[#C6A969] border rounded-md space-y-3 mt-10">
            <img src="storage/ayamgoreng.png" class="w-full h-64 object-cover rounded-t-md">
                <div class="flex items-center pl-7">
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
                <div class="feature-header flex justify-between items-center pl-7">
                    <h3 class="text-lg text-gray-800 font-bold">NASI GORENG</h3>
                </div>
                <div class="flex space-x-3 pl-7 pb-20">
                    <img src="/storage/cooking.jpg" alt="" class="h-7 w-7 rounded-full object-cover">
                    <p class="font-semibold">Spongebob</p>
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-12">
        <h1 class="font-bold text-3xl text-center mb-8">Resep Terbaru</h1>

        <div class="flex flex-wrap justify-center gap-6">
            <!-- Card 1 -->
            <div class="w-[20%] space-y-2">
                <img src="/storage/cooking.jpg" alt="Cooking" class="w-full h-64 object-cover rounded-md">
                <p class="font-semibold text-xl">Makanan Sehat</p>
            </div>
            <!-- Card 1 -->
            <div class="w-[20%] space-y-2">
                <img src="/storage/cooking.jpg" alt="Cooking" class="w-full h-64 object-cover rounded-md">
                <p class="font-semibold text-xl">Makanan Sehat</p>
            </div>
            <!-- Card 1 -->
            <div class="w-[20%] space-y-2">
                <img src="/storage/cooking.jpg" alt="Cooking" class="w-full h-64 object-cover rounded-md">
                <p class="font-semibold text-xl">Makanan Sehat</p>
            </div>
            <!-- Card 1 -->
            <div class="w-[20%] space-y-2">
                <img src="/storage/cooking.jpg" alt="Cooking" class="w-full h-64 object-cover rounded-md">
                <p class="font-semibold text-xl">Makanan Sehat</p>
            </div>
        </div>
    </section>

    <footer class="bg-[#F1E4C3] text-center">
        <div class="space-y-2 py-7 border-b-4 border-[#9B978D]">
            <h1 class="text-3xl italic font-semibold">Flavoury</h1>
            <p class="px-96">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis tenetur molestias facere dolores libero sit non numquam nostrum possimus rem consectetur fuga quaerat facilis nemo, totam ipsum culpa. Enim, cupiditate!</p>
        </div>
        <div class="flex items-center justify-between px-7 py-3">
            <div>
                <p>&copy;2024 Flavoury - All right reserved</p>
            </div>
            <div class="flex justify-center space-x-7">
                <img src="https://img.icons8.com/?size=100&id=62225&format=png&color=000000"  alt="fb" class="w-5 h-5">
                <img src="https://img.icons8.com/?size=100&id=437&format=png&color=000000"  alt="x" class="w-5 h-5">
                <img src="https://img.icons8.com/?size=100&id=32292&format=png&color=000000"  alt="ig" class="w-5 h-5">
            </div>
        </div>
    </footer>

    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.carousel-image');

        images[currentIndex].classList.remove('hidden');

        function showSlide(index) {
            // Hide all images
            images.forEach(img => img.classList.add('hidden'));
            // Show the selected image
            images[index].classList.remove('hidden');
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % images.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showSlide(currentIndex);
        }
    </script>
</body>
</html>
