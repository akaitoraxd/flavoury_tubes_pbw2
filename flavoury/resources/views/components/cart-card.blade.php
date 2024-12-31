@props(['item'])

<div class="bg-white p-4 rounded-md shadow-md">
    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
        class="w-full h-40 object-cover rounded-md">
    <div class="text-center mt-4">
        <h2 class="text-lg font-bold">{{ $item->name }}</h2>
        <p class="text-sm text-gray-500">{{ $item->description }}</p>
        <p class="text-lg font-bold mt-2">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
        <p class="mt-2">Jumlah: {{ $item->quantity }}</p>

        <!-- Form untuk update quantity -->
        <form action="{{ route('cart.update', $item->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PATCH')
            <div class="flex justify-center items-center space-x-4">
                <input type="number" name="quantity" min="1" value="{{ $item->quantity }}"
                    class="w-16 text-center border border-gray-300 rounded-md">
                <button type="submit" class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-md">
                    Update
                </button>
            </div>
        </form>

        <!-- Form untuk hapus item -->
        <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="mt-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
        </form>
    </div>
</div>
