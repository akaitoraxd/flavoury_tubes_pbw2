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
        $validatedData = $request->validate([
            'name_recipe' => 'required|string|max:255',
            'descrip_recipe' => 'required|string',
            'ingredient' => 'required|string',
            'location' => 'required|string|max:255',
            'flow_cooking' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $filename = Str::random(40) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('images', $filename);

            $validatedData['image'] = $filename;
        }

        $validatedData['id_user'] = auth()->id();

        // Simpan data ke dalam tabel recipes
        Recipe::create($validatedData);

        return redirect()->route('addRecipe')->with('success', 'Recipe successfully added!');
    }

    public function showOwnRecipe()
    {
        $recipes = Recipe::where('id_user', auth()->id())->get();
        return view('test', compact('recipes'));
    }

    public function show($id)
    {
        $recipe = Recipe::where('id_recipe', $id)->firstOrFail();

        if ($recipe->id_user !== auth()->id()) {
            return redirect()->route('showOwnRecipe');
        }
    
        return view('show', compact('recipe'));
    }

    /**
     * Retrieve a private image from storage.
     */
    public function getImage($filename)
    {
        
    }



    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Recipe $recipe)
    // {
        
    // }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id); // Mengambil resep berdasarkan id
        return view('editRecipe', compact('recipe')); // Kirim data ke view editRecipe
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Recipe $recipe)
    // {
        
    // }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'name_recipe' => 'required|string|max:255',
            'descrip_recipe' => 'required|string',
            'ingredient' => 'required|string',
            'location' => 'required|string|max:255',
            'flow_cooking' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        
        if ($request->hasFile('image')) {
            
            if ($recipe->image && Storage::disk('public')->exists('images/' . $recipe->image)) {
                Storage::disk('public')->delete('images/' . $recipe->image);
            }

            // Up gambar baru
            $filename = Str::random(40) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('images', $filename, 'public');
            $validatedData['image'] = $filename;
        }

        $recipe->update($validatedData);

        return redirect()->route('recipe.show', $recipe->id_recipe)->with('success', 'Recipe updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_recipe)
    {
        $recipe = Recipe::where('id_recipe', $id_recipe)->firstOrFail();

        // if ($recipe->image && Storage::exists('storage/images/'.$recipe->image)) {
        //     Storage::delete('storage/images/' . $recipe->image);
        // }

        if ($recipe->image && Storage::disk('public')->exists('images/' . $recipe->image)) {
            Storage::disk('public')->delete('images/' . $recipe->image);
        }

        $recipe->delete();

        return redirect()->route('showOwnRecipe')->with('success', 'Recipe deleted successfully!');
    }

}
