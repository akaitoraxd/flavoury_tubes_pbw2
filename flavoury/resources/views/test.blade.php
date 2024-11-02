<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F4F4F0] flex h-screen font-sans">
    <!-- Left Section: Login Form -->
    <div class="w-full lg:w-2/5 flex flex-col justify-center items-center bg-[#FFFFEC] p-8 lg:p-20 shadow-lg shadow-gray-300">
        <div class="w-full max-w-sm">
            <a href="/">
                <h1 class="text-4xl font-semibold italic text-[#6A994E] mb-8 text-center duration-300 transform hover:scale-125 cursor-pointer">Flavoury</h1>
            </a>
            <form class="space-y-6">
                <!-- Email -->
                <div>
                    <input type="text" placeholder="Email" class="w-full border-b border-gray-300 text-gray-700 py-2 focus:outline-none focus:border-green-500 bg-transparent placeholder-gray-500 transition-colors duration-300">
                </div>
                
                <!-- Password -->
                <div>
                    <input type="password" placeholder="Password" class="w-full border-b border-gray-300 text-gray-700 py-2 focus:outline-none focus:border-green-500 bg-transparent placeholder-gray-500 transition-colors duration-300">
                </div>
                
                <!-- Forgot Password -->
                <div class="text-sm text-gray-600 mt-2">
                    <a href="#" class="hover:underline hover:text-green-600 transition duration-300">forgot password?</a>
                </div>
                
                <!-- Login Button -->
                <div>
                    <button type="submit" class="w-full bg-gradient-to-r from-[#6A994E] to-[#4F7942] text-white font-semibold py-2 rounded shadow-md hover:from-[#4F7942] hover:to-[#6A994E] transition-all duration-300 transform hover:-translate-y-1">Log In</button>
                </div>
                
                <!-- Sign Up Link -->
                <div class="text-center text-gray-600 mt-6">
                    don’t have an account? <a href="#" class="font-semibold text-[#6A994E] hover:underline transition duration-300">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Section: Image -->
    <div class="hidden lg:block w-3/5 bg-cover bg-center shadow-lg" style="background-image: url('storage/pasta.jpg');"></div>
</body>
</html>
