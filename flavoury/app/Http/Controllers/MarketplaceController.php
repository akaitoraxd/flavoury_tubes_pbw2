<?php

namespace App\Http\Controllers;

use App\Models\market;
use App\Models\marketplace;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class MarketplaceController extends Controller
{
    public function index()
    {
        $items = market::all();
        return view('adminMarket', compact('items'));
    }

    

    public function indexMarket(Request $request)
    {
        $type = $request->get('type', 'Alat'); // Default ke 'Alat' jika tidak ada query string

        // Filter item berdasarkan tipe
        $items = Market::where('type', $type)->get();
    
        // Kirim data ke view
        return view('market', compact('items', 'type'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'sold_amount' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        market::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'sold_amount' => $request->sold_amount,
            'image' => $imagePath,
        ]);

        return redirect()->route('adminMarket')->with('success', 'Item created successfully.');
    }

    public function edit(market $item)
    {
        return view('create', compact('item'));
    }

    public function update(Request $request, market $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'sold_amount' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $item->image = $imagePath;
        }

        $item->update($request->only(['name', 'type', 'description', 'price', 'sold_amount', 'image']));

        return redirect()->route('adminMarket')->with('success', 'Item updated successfully.');
    }

    public function destroy(market $item)
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();

        return redirect()->route('adminMarket')->with('success', 'Item deleted successfully.');
    }
}
