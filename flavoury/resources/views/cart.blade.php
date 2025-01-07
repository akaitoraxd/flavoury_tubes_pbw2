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
            <a href="/market" class="text-lg">Kembali ke Market</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="p-6">

        <h1 class="text-3xl font-semibold mb-6 text-center">Keranjang Belanja</h1>
        @php
            $totalQuantity = 0;
            $cart = session('cart', collect()); 
            $items = collect($cart)->map(function ($item) {
                return $item['name'] . ' (' . $item['quantity'] . ')';
            })->implode(', ');

        @endphp
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
                                            <td class="px-6 py-4">Rp.{{ number_format($item['price'], 0, ',', '.') }}
                                            </td>
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
                                            @php
                                                $totalQuantity += $item['quantity'];
                                            @endphp
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
            <button id="showPopup" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Checkout</button>

        @else
            <p class="text-center text-lg">Keranjang Anda kosong. Silakan tambahkan produk ke keranjang.</p>
        @endif

    </main>
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>

    <x-footer></x-footer>

    <!-- Pop-Up -->
    <div id="popup" class="fixed inset-0 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-80">
            <h2 class="text-xl font-semibold text-center mb-4">Enter Your Details</h2>
            <form action="/checkout" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" required name="name" placeholder="Your Name"
                        class="w-full border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Address</label>
                    <input type="text" required name="address" placeholder="Your Address"
                        class="w-full border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Phone Number</label>
                    <input type="text" required name="phone" placeholder="Your Phone"
                        class="w-full border-gray-300 rounded-md p-2">
                </div>
                <input type="hidden" name="qty" value="{{$totalQuantity}}">
                <input type="hidden" name="total_price" value="{{$total}}">
                <input type="hidden" name="items" value="{{$items}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <p>Total: Rp.{{ number_format($total, 0, ',', '.') }}</p>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                    Submit
                </button>
            </form>
            <button id="closePopup" class="mt-4 w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">
                Close
            </button>
        </div>
    </div>

    <script>
        const showPopup = document.getElementById('showPopup');
        const closePopup = document.getElementById('closePopup');
        const popup = document.getElementById('popup');
        const overlay = document.getElementById('overlay');

        showPopup.addEventListener('click', () => {
            popup.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });

        closePopup.addEventListener('click', () => {
            popup.classList.add('hidden');
            overlay.classList.add('hidden');
        });

        overlay.addEventListener('click', () => {
            popup.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    </script>



</body>

</html>