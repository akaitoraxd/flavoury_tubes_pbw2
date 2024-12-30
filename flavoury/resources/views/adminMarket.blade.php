<!-- resources/views/admin/items/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Management</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @Vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-10 px-4">
    <h1 class="text-2xl font-bold mb-6">Items</h1>

    <a href="{{ route('items.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Add New Item</a>

    <div class="bg-green-100 text-green-700 p-4 rounded mb-4 hidden">Success message here</div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Type</th>
                    <th class="border border-gray-300 px-4 py-2">Description</th>
                    <th class="border border-gray-300 px-4 py-2">Price</th>
                    <th class="border border-gray-300 px-4 py-2">Sold Amount</th>
                    <th class="border border-gray-300 px-4 py-2">Image</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->type }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->description }}</td>
                    <td class="border border-gray-300 px-4 py-2">Rp.{{ $item->price }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->sold_amount }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-20 h-20">
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('items.edit', $item->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
