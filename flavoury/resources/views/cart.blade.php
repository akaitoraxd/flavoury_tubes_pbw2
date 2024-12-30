<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') {{-- Include Tailwind CSS --}}
    
</head>
<body class="bg-[#f9f5e3] font-sans">

<nav class="bg-[#f9f5e3] shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <div class="text-3xl font-bold font-serif">
                FLAVOURY
            </div>

            <!-- Cart -->
            <div class="flex items-center space-x-2 text-lg font-medium">
                <span>Keranjang</span>
                <div class="flex items-center space-x-4 px-4">
                    <button class="text-lg">🛒</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="p-6">
        <div class="grid grid-cols-1 gap-6">
            <x-cart-card />
            <x-cart-card />
        </div>
    </main>
    
</body>
</html>
