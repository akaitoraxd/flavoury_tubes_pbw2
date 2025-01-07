<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market: Alat</title>
    @vite('resources/css/app.css') {{-- Include Tailwind CSS --}}
</head>

<body class="bg-[#f9f5e3] font-sans">

    <x-navbar />

    <!-- Header -->
    <header class="px-20 py-4 text-black flex items-center justify-between">
        <div class="logo text-2xl font-bold px-4">FLAVOURY</div>
        <!--  -->
        <div class="flex items-center space-x-4 px-4">
            <a href="{{ route('cart.index') }}" class="text-lg">🛒</a>
            <button class="rounded-full bg-gray-300 w-8 h-8"></button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="p-6">
        <!-- Filter Buttons: Alat and Bahan -->
        <div class="flex justify-center space-x-4 mb-6">
            <a href="{{ route('marketplace.index', ['type' => 'Alat']) }}">
                <button
                    class="px-6 py-2 rounded-md text-white {{ $type === 'Alat' ? 'bg-[#D4C69E]' : 'bg-gray-200' }}">Alat</button>
            </a>
            <a href="{{ route('marketplace.index', ['type' => 'Bahan']) }}">
                <button
                    class="px-6 py-2 rounded-md {{ $type === 'Bahan' ? 'bg-[#D4C69E]' : 'bg-gray-200' }}">Bahan</button>
            </a>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-5 gap-6">
            @foreach ($items as $item)
                <div class="bg-white p-4 rounded-md shadow-md">
                    <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->name }}"
                        class="w-full h-40 object-cover rounded-md">
                    <div class="text-center mt-4">
                        <h2 class="text-lg font-bold">{{ $item->name }}</h2>
                        <p class="text-sm text-gray-500">{{ $item->description }}</p>
                        <p class="text-lg font-bold mt-2">Rp.{{ number_format($item->price, 0, ',', '.') }}</p>

                        <!-- Add to Cart Form -->
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="name" value="{{ $item->name }}">
                            <input type="hidden" name="price" value="{{ (int) $item->price }}"> <!-- Pastikan price adalah integer -->
                            <input type="hidden" name="image" value="{{ $item->image }}">
                            <input type="hidden" name="description" value="{{ $item->description }}">
                            <input type="hidden" name="quantity" value="1"> <!-- Pastikan quantity adalah angka -->
                            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md mt-2">Add to
                                Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <x-footer />
</body>

</html>