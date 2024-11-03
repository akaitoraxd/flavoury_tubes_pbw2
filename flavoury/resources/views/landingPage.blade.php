<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Website Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <style>
        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: translateY(100vh);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fade-in-left {
            0% {
                opacity: 0;
                transform: translateX(-100vh);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-in-left {
            animation: fade-in-left 2s ease-out forwards;
        }


        .animate-fade-in-down-up {
            animation: fade-in 2s ease-out forwards;
        }
    </style>
</head>

<body class="font-sans text-gray-800">

    <header class="absolute top-0 left-0 w-full p-5 my-2 flex justify-between z-10 animate-fade-in-left">
        <div class="text-white">
            <h1 class="text-2xl mx-5 font-mono">Flavoury</h1>
        </div>
        <nav class="flex space-x-11">
            <a href="#" class="text-white text-lg hover:text-yellow-500 transition duration-300">Home</a>
            <a href="#" class="text-white text-lg hover:text-yellow-500 transition duration-300">Feature</a>
            <a href="#" class="text-white text-lg hover:text-yellow-500 transition duration-300">Market</a>
            <a href="#" class="text-white text-lg hover:text-yellow-500 transition duration-300">About Us</a>
        </nav>
        <div class="sign space-x-2">
            <!-- login -->
            <a href="/login" class="text-white text-lg hover:text-yellow-500 transition duration-300">LOG IN</a>
            <!-- sign up -->
            <a href="/register" class="text-white text-lg hover:text-yellow-500 hover:bg-gray-300 hover:bg-opacity-25 transition duration-300 bg-opacity-40 bg-gray-200 rounded-full py-2 px-5 ">SIGN UP</a>
        </div>
    </header>

    <section
        class="relative h-screen flex items-center justify-center bg-cover bg-center bg-[url('{{ URL('storage/cooking.jpg') }}')]">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="relative z-10 text-center text-white space-y-4 animate-fade-in-down-up">
            <h2 class="text-4xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>
            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit error omnis earum maxime</p>
        </div>
    </section>

    <section class="flex flex-wrap justify-start items-center gap-5 p-10 md:p-20">
        
        <div class="feature w-full max-w-xs bg-gray-100 rounded-lg p-5 m-3 shadow-lg">
            <div class="feature-header flex justify-between items-center border-b border-gray-300 pb-2 mb-3">
                <h3 class="text-lg text-gray-800 font-semibold">NASI GORENG</h3>
                <p class="text-sm font-bold text-gray-500">FAVORIT</p>
            </div>
            <img src="storage/nasgor.png" class="w-full h-48 object-cover rounded-md my-3">
            <div class="feature-body text-gray-600">
                <p class="text-sm leading-relaxed line-clamp-4">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Possimus odio deleniti at corporis quae officiis excepturi! Est voluptas possimus illo sit
                    maiores odio pariatur vero? Quasi sunt delectus veniam perferendis.</p>
            </div>
            <div class="more flex justify-end mt-3">
                <a href="" class="px-5 py-2 bg-black text-white rounded-full text-sm no-underline">Selengkapnya</a>
            </div>
        </div>
        
        <div class="feature w-full max-w-xs bg-gray-100 rounded-lg p-5 m-3 shadow-lg">
            <div class="feature-header flex justify-between items-center border-b border-gray-300 pb-2 mb-3">
                <h3 class="text-lg text-gray-800 font-semibold">NASI GORENG</h3>
                <p class="text-sm font-bold text-gray-500">FAVORIT</p>
            </div>
            <img src="storage/nasgor.png" class="w-full h-48 object-cover rounded-md my-3">
            <div class="feature-body text-gray-600">
                <p class="text-sm leading-relaxed line-clamp-4">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Possimus odio deleniti at corporis quae officiis excepturi! Est voluptas possimus illo sit
                    maiores odio pariatur vero? Quasi sunt delectus veniam perferendis.</p>
            </div>
            <div class="more flex justify-end mt-3">
                <a href="" class="px-5 py-2 bg-black text-white rounded-full text-sm no-underline">Selengkapnya</a>
            </div>
        </div>
        
        <div class="feature w-full max-w-xs bg-gray-100 rounded-lg p-5 m-3 shadow-lg">
            <div class="feature-header flex justify-between items-center border-b border-gray-300 pb-2 mb-3">
                <h3 class="text-lg text-gray-800 font-semibold">NASI GORENG</h3>
                <p class="text-sm font-bold text-gray-500">FAVORIT</p>
            </div>
            <img src="storage/nasgor.png" class="w-full h-48 object-cover rounded-md my-3">
            <div class="feature-body text-gray-600">
                <p class="text-sm leading-relaxed line-clamp-4">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Possimus odio deleniti at corporis quae officiis excepturi! Est voluptas possimus illo sit
                    maiores odio pariatur vero? Quasi sunt delectus veniam perferendis.</p>
            </div>
            <div class="more flex justify-end mt-3">
                <a href="" class="px-5 py-2 bg-black text-white rounded-full text-sm no-underline">Selengkapnya</a>
            </div>
        </div>

    </section>z
</body>

</html>