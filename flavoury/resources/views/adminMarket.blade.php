<!-- resources/views/admin/items/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-10 px-4">
    <h1 class="text-2xl font-bold mb-6">Items</h1>

    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Add New Item</a>

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
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Sample Item 1</td>
                    <td class="border border-gray-300 px-4 py-2">Type A</td>
                    <td class="border border-gray-300 px-4 py-2">This is a sample description.</td>
                    <td class="border border-gray-300 px-4 py-2">$10.00</td>
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <img src="https://via.placeholder.com/50" alt="Sample Item 1" class="w-12 h-12">
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="#" class="text-yellow-500 hover:underline">Edit</a>
                        <button class="text-red-500 hover:underline ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
