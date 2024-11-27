<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury</title>
    @Vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-[#FAF7F2] to-[#FDEBD0] font-sans text-gray-800">

    <!-- Feedback Component -->
    <x-feedback />

    <!-- Navbar -->
    <nav class="bg-[#F1E4C3] py-4 px-8 flex justify-between items-center shadow-md fixed top-0 left-0 w-full z-20">
        <h1 class="text-2xl font-bold text-gray-800 tracking-wide">Flavoury</h1>
        <a href="/login"
            class="bg-[#C6A969] text-black py-2 px-6 rounded-md border border-black hover:bg-[#B89054] hover:shadow-lg shadow-[4px_4px_0px_rgba(105,63,35,0.7)] transition-all duration-300">
            Login
        </a>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex flex-col lg:flex-row items-center justify-between px-10 lg:px-20 relative ">
        <div class="lg:w-1/2 text-start z-10 space-y-6 md:my-auto my-auto">
            <h1 class="text-6xl lg:text-7xl font-bold text-gray-800 leading-tight">
                Discover Culinary Delights
            </h1>
            <p class="mt-4 text-lg text-gray-700 font-medium leading-relaxed">
                Let Flavoury guide you through a journey of taste and passion. Explore unforgettable recipes and indulge
                in the art of cooking.
            </p>
            <button onclick="location.href='#isi'" class="mt-6 bg-[#C6A969] text-white py-3 px-8 rounded-md hover:bg-[#B89054] hover:shadow-lg shadow-lg transition-all duration-300">
                Get Started
            </button>
        </div>
        <div class="lg:w-1/2 lg:relative absolute sm:z-10 flex justify-center lg:justify-end z-0 md:my-auto my-auto">
            <img src="/storage/first.png" alt="Decorative Background"
                class="max-w-full h-[80vh] object-contain opacity-10 lg:opacity-100 ">
        </div>
    </section>

    <!-- Why Flavoury Section -->
    <section id="isi" class="h-[100vh] flex items-center justify-start px-6">
        <div class="w-1/2">
            <h2 class="text-4xl font-semibold text-gray-800 mb-6 border-b-4 border-[#C6A969] pb-2">
                Why Flavoury?
            </h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Discover why Flavoury is the best choice for culinary enthusiasts. We bring inspiration, ease, and joy
                to your kitchen.
            </p>
        </div>
        <div class="absolute w-full h-full flex justify-end px-2 overflow-auto"><!-- yang ini-->
            <div class="w-1/2 space-y-6">
                <!-- Zig-Zag Content -->
                <div
                    class="w-1/2 h-[300px] bg-[#F1E4C3] border border-gray-300 rounded-lg shadow-lg p-6 ml-0 mr-auto hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Feature 1</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Explore unique recipes crafted by culinary experts for every taste and preference.
                    </p>
                </div>
                <div
                    class="w-1/2 h-[300px] bg-[#F1E4C3] border border-gray-300 rounded-lg shadow-lg p-6 mr-0 ml-auto hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Feature 2</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Discover interactive cooking tools that make your culinary journey seamless and fun.
                    </p>
                </div>
                <div
                    class="w-1/2 h-[300px] bg-[#F1E4C3] border border-gray-300 rounded-lg shadow-lg p-6 ml-0 mr-auto hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Feature 3</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Enjoy a personalized experience tailored to your cooking needs and preferences.
                    </p>
                </div>
                <div
                    class="w-1/2 h-[300px] bg-[#F1E4C3] border border-gray-300 rounded-lg shadow-lg p-6 mr-0 ml-auto hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Feature 4</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Join a community of food lovers and share your culinary journey with the world.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 px-6 lg:px-20 bg-[#F9F5EC]">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold text-gray-800 mb-4">What Our Users Say</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Hear from our satisfied users about their experience with Flavoury.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <p class="italic text-gray-700 mb-4">"Flavoury has transformed the way I cook. The recipes are
                    fantastic!"</p>
                <h4 class="text-lg font-semibold text-gray-800">- Alex Johnson</h4>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <p class="italic text-gray-700 mb-4">"Easy to use and full of inspiring ideas. Highly recommended!"</p>
                <h4 class="text-lg font-semibold text-gray-800">- Maria Lee</h4>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <p class="italic text-gray-700 mb-4">"A must-have for anyone who loves cooking. Amazing features!"</p>
                <h4 class="text-lg font-semibold text-gray-800">- John Smith</h4>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-[#C6A969] py-16 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Join Our Culinary Community</h2>
        <p class="text-lg mb-8">
            Discover new recipes, share your own, and connect with fellow food lovers.
        </p>
        <a href="/register"
            class="bg-white text-[#C6A969] py-3 px-6 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300">
            Get Started Now
        </a>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-[#FAF7F2] text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-4xl font-semibold text-gray-800 mb-4">Stay Updated with Flavoury</h2>
            <p class="text-lg text-gray-700 mb-6">
                Subscribe to our newsletter and get the latest recipes and cooking tips straight to your inbox.
            </p>
            <form class="flex justify-center items-center space-x-4">
                <input type="email" placeholder="Enter your email"
                    class="w-full max-w-md py-3 px-4 rounded-md text-gray-800 focus:outline-none border border-gray-300">
                <button type="submit"
                    class="bg-[#C6A969] text-white py-3 px-6 rounded-md hover:bg-[#B89054] transition duration-300">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 px-6 lg:px-20 bg-white">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold text-gray-800 mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Have questions? We’ve got answers to help you get started.
            </p>
        </div>
        <div class="space-y-6">
            <div class="bg-[#F1E4C3] p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I get started with Flavoury?</h3>
                <p class="text-gray-700">Sign up for free and explore a variety of recipes and features designed for
                    food lovers.</p>
            </div>
            <div class="bg-[#F1E4C3] p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Can I share my own recipes?</h3>
                <p class="text-gray-700">Absolutely! Flavoury allows you to share and showcase your own culinary
                    creations.</p>
            </div>
            <div class="bg-[#F1E4C3] p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Is Flavoury free to use?</h3>
                <p class="text-gray-700">Yes, Flavoury offers free access to most features. Premium options are also
                    available for advanced tools.</p>
            </div>
        </div>
    </section>

    <x-footer />

</body>

</html>
