<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavoury Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F4F4F0] flex h-screen font-sans">
    <!-- Image Section on the Left -->
    <div class="hidden lg:block w-3/5 bg-cover bg-center shadow-lg" style="background-image: url('storage/pasta.jpg');"></div>

    <!-- Right Section for Form -->
    <div class="w-full lg:w-2/5 flex flex-col justify-center items-center bg-[#FFFFEC] p-8 lg:p-20 shadow-lg shadow-gray-300">
        <div class="w-full max-w-sm">
            <a href="/">
                <h1 class="text-4xl font-semibold italic text-[#6A994E] mb-8 text-center duration-300 transform hover:scale-125 cursor-pointer">Flavoury</h1>
            </a>
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Email Field -->
                <div>
                    <input id="email" type="email" name="email" class="w-full border-b border-gray-300 text-gray-700 py-2 focus:outline-none focus:border-green-500 bg-transparent placeholder-gray-500 transition-colors duration-300" required autocomplete="username" placeholder="Email">
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                
                <!-- Name Field -->
                <div>
                    <input id="name" type="text" name="name" class="w-full border-b border-gray-300 text-gray-700 py-2 focus:outline-none focus:border-green-500 bg-transparent placeholder-gray-500 transition-colors duration-300" required autofocus autocomplete="name" placeholder="Name">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                
                <!-- Password Field -->
                <div>
                    <input id="password" type="password" name="password" class="w-full border-b border-gray-300 text-gray-700 py-2 focus:outline-none focus:border-green-500 bg-transparent placeholder-gray-500 transition-colors duration-300" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="w-full border-b border-gray-300 text-gray-700 py-2 focus:outline-none focus:border-green-500 bg-transparent placeholder-gray-500 transition-colors duration-300" required autocomplete="new-password" placeholder="Confirm Password">
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Register Button -->
                <div>
                    <button type="submit" class="w-full bg-gradient-to-r from-[#6A994E] to-[#4F7942] text-white font-semibold py-2 rounded shadow-md hover:from-[#4F7942] hover:to-[#6A994E] transition-all duration-300 transform hover:-translate-y-1">Register</button>
                </div>

                <!-- Already Registered Link -->
                <div class="text-center text-gray-600 mt-6">
                    Already registered? <a href="{{ route('login') }}" class="font-semibold text-[#6A994E] hover:underline transition duration-300">Log In</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
