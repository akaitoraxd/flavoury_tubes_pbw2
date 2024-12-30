<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Menampilkan keranjang
    public function index()
    {
        // Mengambil data cart dari session
        $cart = session('cart', []);
        $total = 0;

        // Menghapus item yang tidak lengkap atau kosong
        $cart = array_filter($cart, function ($item) {
            return isset($item['id'], $item['name'], $item['price'], $item['quantity']) &&
                !empty($item['id']) && !empty($item['name']) && !empty($item['price']) && !empty($item['quantity']);
        });

        // Menghitung total harga berdasarkan quantity
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Menampilkan halaman keranjang dengan data cart dan total
        return view('cart', compact('cart', 'total'));
    }


    // Menambahkan item ke keranjang
    public function add(Request $request)
    {
        $cart = session('cart', []);

        // Validasi data yang diterima
        if (!isset($request->id, $request->name, $request->price, $request->quantity)) {
            session()->flash('error', 'Data produk tidak lengkap.');
            return redirect()->route('marketplace.index');
        }

        // Membuat array item untuk ditambahkan ke keranjang
        $item = [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $request->image ?? '', // Menghindari null untuk image
            'description' => $request->description ?? '', // Menghindari null untuk description
        ];

        // Cek jika item sudah ada, update jumlahnya
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] += $request->quantity;
        } else {
            $cart[$request->id] = $item;
        }

        // Menyimpan keranjang kembali ke session
        session(['cart' => $cart]);

        session()->flash('success', 'Item berhasil ditambahkan ke keranjang!');
        return redirect()->route('cart.index');
    }


    // Mengupdate jumlah item di keranjang
    public function update(Request $request, $id)
    {
        // Mengambil keranjang dari session
        $cart = session('cart', []);

        // Cari item berdasarkan id dan update quantity
        foreach ($cart as &$item) {
            if ($item['id'] == $id) {
                // Update quantity berdasarkan input
                $item['quantity'] = $request->quantity;
                break;
            }
        }

        // Menyimpan kembali keranjang ke session
        session(['cart' => $cart]);

        // Redirect ke halaman keranjang
        return redirect()->route('cart.index');
    }

    // Menghapus item dari keranjang
    public function remove($id)
    {
        // Mengambil keranjang dari session
        $cart = session('cart', []);

        // Menghapus item berdasarkan id
        $cart = array_filter($cart, function ($item) use ($id) {
            return $item['id'] != $id;
        });

        // Reindex array untuk menjaga urutan (untuk menghindari masalah array kosong)
        session(['cart' => array_values($cart)]);

        // Redirect ke halaman keranjang
        return redirect()->route('cart.index');
    }
}
