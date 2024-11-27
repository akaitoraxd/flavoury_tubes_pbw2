<nav class="flex justify-between px-7 py-5">
        <div>
            <img src="/storage/FLAVOURY.png" alt="" class="h-8">

        </div>

        <div class="hidden lg:flex md:flex space-x-6 text-[20px]">
            <div class="flex hover:border-b-2 border-black items-center">
                <img src="https://img.icons8.com/?size=100&id=i6fZC6wuprSu&format=png&color=000000" alt="Search Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                <a href="/home" class="">Home</a>
            </div>
            <div class="flex hover:border-b-2 border-black items-center">
                <img src="https://img.icons8.com/?size=100&id=85920&format=png&color=000000" alt="Search Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                <a href="/recipe" class="">Recipe</a>
            </div>
            <div class="flex hover:border-b-2 border-black items-center">
                <img src="https://img.icons8.com/?size=100&id=85080&format=png&color=000000" alt="Search Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                <a href="/market" class="">Market</a>
            </div>
            <div class="flex hover:border-b-2 border-black items-center">
                <img src="https://img.icons8.com/?size=100&id=1501&format=png&color=000000" alt="Search Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                <a href="/addrecipe" class="">Add</a>
            </div>
        </div>

        <div class="flex items-center">
            <!-- saat besar yang tampilan profile dan search -->
            <div class="hidden lg:flex md:flex items-center space-x-3">
                <p>
                    <img src="https://img.icons8.com/?size=100&id=59878&format=png&color=000000" alt="Search Icon" class="w-9 h-9 cursor-pointer hover:opacity-80">
                </p>
                <details class="group">
                    <summary class="w-9 h-9 rounded-full overflow-hidden hover:scale-110 hover:shadow-lg transition duration-200 cursor-pointer list-none">
                        <img src="/storage/pasta.jpg" alt="Recipe" class="object-cover w-full h-full">
                    </summary>
                    <div class="absolute right-1 bg-[#F1E4C3] shadow-md p-4 rounded-md z-10 w-56 space-y-3">
                        <a href="/profile" class="flex items-center space-x-3 hover:bg-[#CBAC8B] rounded-md p-2">
                            <img src="/storage/pasta.jpg" alt="Profile" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <p class="font-semibold">Spongebob</p>
                                <p class="text-sm text-gray-500">View Profile</p>
                            </div>
                        </a>
                        <a href="/test" class="flex items-center justify-center hover:scale-105 transition-transform duration-300">
                            <p class="bg-[#FFFFEC] px-8 py-2 rounded-lg font-medium text-gray-700 shadow-md hover:bg-[#CBAC8B] hover:text-white transition-colors duration-300">
                                Settings
                            </p>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="flex items-center justify-center hover:scale-105 transition-transform duration-300">
                            @csrf
                            <button type="submit" class="bg-[#FFFFEC] px-8 py-2 rounded-lg font-medium text-gray-700 shadow-md hover:bg-[#CBAC8B] hover:text-white transition-colors duration-300">
                                Logout
                            </button>
                        </form>
                    </div>
                </details>
            </div>

            <!-- mobile -->
            <div class="lg:hidden md:hidden">
                <details class="group">
                <summary class="w-9 h-9 flex items-center justify-center cursor-pointer">
                    <div class="flex flex-col space-y-1 w-5 h-5">
                        <div class="w-full h-0.5 bg-black "></div>
                        <div class="w-full h-0.5 bg-black "></div>
                        <div class="w-full h-0.5 bg-black "></div>
                    </div>
                </summary>
                    <div class="absolute left-0 bg-[#F1E4C3] flex flex-col justify-center items-start shadow-md py-6 rounded-md z-10 w-full px-8 space-y-4">
                        <a href="/home" class="flex items-center space-x-2 hover:border-b-2 border-black py-2 w-full">
                            <img src="https://img.icons8.com/?size=100&id=i6fZC6wuprSu&format=png&color=000000" alt="Home Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                            <p  class="hover:opacity-80">Home</p>
                        </a>
                        <a href="/recipe"  class="flex items-center space-x-2 hover:border-b-2 border-black py-2 w-full">
                            <img src="https://img.icons8.com/?size=100&id=85920&format=png&color=000000" alt="Recipe Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                            <p class="hover:opacity-80">Recipe</p>
                        </a>
                        <a href="/market" class="flex items-center space-x-2 hover:border-b-2 border-black py-2 w-full">
                            <img src="https://img.icons8.com/?size=100&id=85080&format=png&color=000000" alt="Market Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                            <p class="hover:opacity-80">Market</p>
                        </a>
                        <a href="/addrecipe" class="flex items-center space-x-2 hover:border-b-2 border-black py-2 w-full">
                            <img src="https://img.icons8.com/?size=100&id=1501&format=png&color=000000" alt="Add Icon" class="w-6 h-6 cursor-pointer hover:opacity-80">
                            <p class="hover:opacity-80">Add</p>
                        </a>
                    </div>
                </details>
             </div>
        </div>

    </nav>