<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tambahkan logika untuk menampilkan daftar resep
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addRecipe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name_recipe' => 'required|string|max:255',
            'descrip_recipe' => 'required|string',
            'ingredient' => 'required|string',
            'location' => 'required|string|max:255',
            'flow_cooking' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // opsional
        ]);


        // Proses upload gambar dengan nama hash
        if ($request->hasFile('image')) {
            $filename = Str::random(40) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('images', $filename);

            // Simpan nama file ke dalam database
            $validatedData['image'] = $filename;
        }

        // Tambahkan ID pengguna yang sedang login
        $validatedData['id_user'] = auth()->id();

        // Simpan data ke dalam tabel recipes
        Recipe::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('addRecipe')->with('success', 'Recipe successfully added!');
    }

    /**
     * Retrieve a private image from storage.
     */
    public function getImage($filename)
    {
        $filePath = 'public/images/' . $filename;

        if (Storage::exists($filePath)) {
            // Kembalikan file untuk diunduh
            return Storage::download($filePath);
            // Jika ingin menampilkan langsung di browser:
            // return response()->file(storage_path('app/' . $filePath));
        }

        return abort(404, 'Image not found');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        // Tambahkan logika untuk menampilkan resep tertentu
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        // Tambahkan logika untuk form edit resep
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        // Tambahkan logika untuk update resep
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        // Tambahkan logika untuk menghapus resep
    }
}
