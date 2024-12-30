<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - FLAVOURY</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#f9f5e3] font-sans">

    <x-navbar />

    <!-- Header -->
    <header class="px-20 py-4 text-black flex items-center justify-between">
        <div class="logo text-2xl font-bold px-4">FLAVOURY</div>
        <div class="flex items-center space-x-4 px-4">
            <a href="/market" class="text-lg">Kembali ke Pasar</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="p-6">
        <h1 class="text-3xl font-semibold mb-6 text-center">Keranjang Belanja</h1>

        @if (count($cart) > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto bg-white shadow-md rounded-md">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left">Produk</th>
                            <th class="px-6 py-3 text-left">Harga</th>
                            <th class="px-6 py-3 text-left">Jumlah</th>
                            <th class="px-6 py-3 text-left">Subtotal</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $item)
                            <tr class="border-b">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}"
                                             class="w-20 h-20 object-cover rounded-md mr-4">
                                        <span>{{ $item['name'] }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">Rp.{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="number" name="quantity" min="1" value="{{ $item['quantity'] }}"
                                               class="w-16 text-center border border-gray-300 rounded-md">
                                        <button type="submit" class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-md">
                                            Update
                                        </button>
                                    </form>
                                </td>
                                <td class="px-6 py-4">
                                    Rp.{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Total -->
            <div class="mt-6 flex justify-end">
                <div class="text-xl font-semibold">
                    <p>Total: Rp.{{ number_format($total, 0, ',', '.') }}</p>
                </div>
            </div>

            <!-- Checkout Button -->
            
        @else
            <p class="text-center text-lg">Keranjang Anda kosong. Silakan tambahkan produk ke keranjang.</p>
        @endif
    </main>

    <x-footer></x-footer>

</body>
</html>
