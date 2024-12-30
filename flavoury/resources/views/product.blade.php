<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    @vite('resources/css/app.css') {{-- Tailwind CSS --}}
</head>
<body class="bg-[#f9f5e3] text-gray-800 font-sans min-h-screen flex flex-col">

    <!-- Main Content Wrapper -->
    <div class="flex-grow">

        <!-- Header -->
        <div class="flex justify-between items-center bg-[#CBAC8B] p-4">
            <a href="#" class="text-gray-700 hover:text-gray-900 flex items-center">
                <!-- Back Arrow -->
                <span class="text-2xl">&larr;</span>
            </a>
            <div class="text-lg font-semibold">Detail Product</div>
            <div class="flex space-x-4">
                <!-- Search and Cart Icons -->
                <button class="text-gray-700 hover:text-gray-900">🔍</button>
                <button class="text-gray-700 hover:text-gray-900">🛒</button>
            </div>
        </div>

        <!-- Product Image Section -->
        <div class="p-6 text-center">
            <h2 class="text-gray-700 font-semibold mb-4">Pasti Manis dan Terjangkau</h2>
            <img src="https://via.placeholder.com/300x200" alt="Banana Image" class="mx-auto rounded-lg shadow-md">
        </div>

        <!-- Product Information -->
        <div class="bg-[#CBAC8B] p-4">
            <div class="flex justify-between mb-2">
                <span class="text-lg font-bold text-gray-800">Rp. 50.000</span>
            </div>
            <p class="text-sm text-gray-700 mb-2">
                Pisang Ambon
            </p>
        </div>

        <!-- Product Details -->
        <div class="p-4 bg-[#E9D9C1]">
            <h3 class="font-bold text-gray-800 mb-2">Detail Produk</h3>
            <p class="text-sm text-gray-700 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
            </p>
        </div>
    </div>

    <!-- Sticky Footer -->
    <div class="p-4 bg-[#CBAC8B] flex justify-between rounded-t-lg">
        <button class="bg-[#b5a297] text-white px-4 py-2 rounded-md hover:bg-[#9d8b7d]">
            Beli Langsung
        </button>
        <button class="bg-[#8d6e63] text-white px-4 py-2 rounded-md hover:bg-[#795548]">
            + Keranjang
        </button>
    </div>

</body>
</html>
