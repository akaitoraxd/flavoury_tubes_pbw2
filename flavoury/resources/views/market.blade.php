<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market: Alat</title>
    @vite('resources/css/app.css') {{-- Include Tailwind CSS --}}
</head>
<body class="bg-[#f9f5e3] font-sans">

    <!-- Header -->
    <header class="px-20 py-4 text-black flex items-center justify-center">
        <div class="logo text-2xl font-bold px-4">FLAVOURY</div>
        <input 
                type="text" 
                placeholder="Search..." 
                class="px-4 py-2 rounded-md text-black flex-1"
        >
        <div class="flex items-center space-x-4 px-4">
            <button class="text-lg">🛒</button>
            <button class="rounded-full bg-gray-300 w-8 h-8"></button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="p-6">
        <div class="flex justify-center space-x-4 mb-6">
            <button class="bg-[#D4C69E] px-6 py-2 rounded-md text-white">Alat</button>
            <button class="bg-gray-200 px-6 py-2 rounded-md">Bahan</button>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Product Card -->
            @foreach(range(1, 20) as $item)
                <div class="border rounded-lg shadow-md overflow-hidden">
                    <img 
                        src="https://via.placeholder.com/300" 
                        alt="Teflon Anti Lengket" 
                        class="w-full"
                    >
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Teflon Anti Lengket</h3>
                        <p class="text-gray-600">Rp 250.000</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

</body>
</html>
