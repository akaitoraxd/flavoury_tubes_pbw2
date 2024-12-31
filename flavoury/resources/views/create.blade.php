<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($item) ? 'Edit' : 'Create' }} Item</title>
    @Vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-2xl font-bold mb-6">{{ isset($item) ? 'Edit' : 'Create' }} Item</h1>

        <!-- Form for creating or editing item -->
        <form action="{{ isset($item) ? route('items.update', $item->id) : route('items.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded shadow-md">
            @csrf
            @if (isset($item))
                @method('PUT') <!-- Jika sedang edit, gunakan PUT -->
            @endif

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Item Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 px-3 py-2 rounded"
                    value="{{ old('name', isset($item) ? $item->name : '') }}" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700 font-medium mb-2">Item Type</label>
                <select name="type" id="type" class="w-full border border-gray-300 px-3 py-2 rounded" required>
                    <option value="Alat" {{ old('type', isset($item) ? $item->type : '') == 'Alat' ? 'selected' : '' }}>Alat</option>
                    <option value="Bahan" {{ old('type', isset($item) ? $item->type : '') == 'Bahan' ? 'selected' : '' }}>Bahan</option>
                </select>
                @error('type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 px-3 py-2 rounded"
                    rows="4" required>{{ old('description', isset($item) ? $item->description : '') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium mb-2">Price</label>
                <input type="number" name="price" id="price" class="w-full border border-gray-300 px-3 py-2 rounded"
                    step="0.01" value="{{ old('price', isset($item) ? $item->price : '') }}" required>
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 hidden">
                <label for="sold_amount" class="block text-gray-700 font-medium mb-2">Sold Amount</label>
                <input type="number" name="sold_amount" id="sold_amount" class="w-full border border-gray-300 px-3 py-2 rounded"
                    value="{{ old('sold_amount', isset($item) ? $item->sold_amount : 0) }}" required>
                @error('sold_amount')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Item Image</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 px-3 py-2 rounded"
                    accept="image/*">
                @if (isset($item) && $item->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Item Image" class="w-32 h-32 object-cover">
                    </div>
                @endif
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">{{ isset($item) ? 'Update' : 'Create' }} Item</button>
            </div>
        </form>
    </div>
</body>

</html>
