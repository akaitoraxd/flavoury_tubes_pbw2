<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    @Vite('resources/css/app.css')
</head>

<body class="bg-[#FFFFEC]">
    <div class="ml-10 mt-10">
        <a href="/home"
            class="bg-[#C6A969] text-black py-2 px-6 rounded-md border border-black hover:bg-[#B89054] hover:shadow-lg shadow-[4px_4px_0px_rgba(105,63,35,0.7)] transition-all duration-300">
            Back to Home
        </a>
    </div>

    <main class="mx-auto my-10 max-w-4xl bg-white p-6 rounded-lg shadow-xl">
        @if($orders->isEmpty())
            <p class="text-center text-lg text-[#C6A969]">No orders found.</p>
        @else
            <table class="min-w-full bg-white border-collapse">
                <thead>
                    <tr class="bg-[#C6A969] text-white">
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Barang</th>
                        <th class="py-2 px-4 border-b">Total</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($orders as $order)
                        <tr class="hover:bg-[#F1E8C8] {{ $i % 2 == 0 ? 'bg-[#efead8]' : '' }}">
                            <td class="py-2 px-4 border-b">{{ $i++ }}</td>
                            <td class="py-2 px-4 border-b">{{ $order->items }}</td>
                            <td class="py-2 px-4 border-b">{{ $order->total_price }}</td>
                            <td class="py-2 px-4 border-b {{ $order->status == 'Paid' ? '!text-green-500' : '!text-red-600' }}">{{ $order->status }}</td>
                            <td class="py-2 px-4 border-b ">{{ $order->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </main>

    <footer class="text-center relative w-full bottom-0 py-4 bg-[#C6A969] text-white mt-10">
        <p>&copy; {{ date('Y') }} Flavoury</p>
    </footer>
</body>

</html>
