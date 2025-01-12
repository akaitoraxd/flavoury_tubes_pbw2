<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Market') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto mt-10 px-4 pb-10">
                    <x-input-label class="!text-2xl font-bold mb-6">Items</x-input-label>

                    <a href="{{ route('admin.items.create') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Add New
                        Item</a>

                    <div class="bg-green-100 text-green-700 p-4 rounded mb-4 hidden">Success message here</div>

                    <div class="overflow-x-auto">
                        <table class="table-auto w-full border-collapse border border-gray-800">
                            <thead>
                                <tr class="bg-gray-600">
                                    <th class="border px-4 py-2"><x-input-label>Name</x-input-label></th>
                                    <th class="border px-4 py-2"><x-input-label>Type</x-input-label></th>
                                    <th class="border px-4 py-2"><x-input-label>Description</x-input-label></th>
                                    <th class="border px-4 py-2"><x-input-label>Price</x-input-label></th>
                                    <!-- <th class="border px-4 py-2"><x-input-label>Sold Amount</x-input-label></th> -->
                                    <th class="border px-4 py-2"><x-input-label>Image</x-input-label></th>
                                    <th class="border px-4 py-2"><x-input-label>Actions</x-input-label></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2"><x-input-label>{{ $item->name }}</x-input-label></td>
                                        <td class="border border-gray-300 px-4 py-2"><x-input-label>{{ $item->type }}</x-input-label></td>
                                        <td class="border border-gray-300 px-4 py-2"><x-input-label>{{ $item->description }}</x-input-label></td>
                                        <td class="border border-gray-300 px-4 py-2"><x-input-label>Rp.{{ $item->price }}</x-input-label></td>
                                        <!-- <td class="border border-gray-300 px-4 py-2"><x-input-label>{{ $item->sold_amount }}</x-input-label></td> -->
                                        <td class="border border-gray-300 px-4 py-2">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                                class="w-20 h-20">
                                        </td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <a href="{{ route('admin.items.edit', $item->id) }}"
                                                class="text-yellow-500 hover:underline">Edit</a>
                                            <form action="{{ route('items.destroy', $item->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-500 hover:underline"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>