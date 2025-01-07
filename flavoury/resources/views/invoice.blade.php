<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-6 rounded-lg shadow-md max-w-sm w-full">
    <h1 class="text-2xl font-semibold mb-4">Invoice</h1>
    <div>
      <h2 class="text-lg font-medium mb-2">Detail Pesanan</h2>
      <div class="space-y-2">
        <table>
            <tr>
                <td>Nama</td>
                <td>: {{$order->name}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>: {{$order->address}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>: {{$order->phone}}</td>
            </tr>
            <tr>
                <td>Jumlah Pesanan</td>
                <td>: {{$order->qty}}</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>: Rp.{{number_format($order->total, 0, ',', '.')}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: {{$order->status}}</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
