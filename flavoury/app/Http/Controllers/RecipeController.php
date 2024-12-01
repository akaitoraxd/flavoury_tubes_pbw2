<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Collection;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $random1 = Recipe::inRandomOrder()->take(1)->get();
        $top3 = Recipe::orderBy('rating', 'desc')->take(3)->get();
        $random5 = Recipe::inRandomOrder()->take(5)->get();
        $newRecipe = Recipe::orderBy('created_at', 'desc')->take(6)->get();

        return view('home', compact('random5', 'top3', 'newRecipe', 'random1'));
    }

    public function allRecipe()
    {
        $allRecipes = Recipe::all();
        $top3 = Recipe::orderBy('rating', 'desc')->take(3)->get();
        $new5 = Recipe::orderBy('created_at', 'desc')->take(5)->get();

        return view('recipe', compact('allRecipes', 'top3', 'new5'));
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
        $user = User::find(auth()->id()); 
        $saved = Recipe::whereIn('id_recipe', function ($query) {
            $query->select('id_recipe')
                  ->from('collections')
                  ->where('id_user', auth()->id());
        })->get();
        return view('ownProfile', compact('recipes', 'user', 'saved'));
    }

    public function show($id)
    {
        $recipe = Recipe::where('id_recipe', $id)->firstOrFail();

        if ($recipe->id_user !== auth()->id()) {
            return redirect()->route('showOwnRecipe');
        }

        return view('show', compact('recipe'));
    }

    public function showRecipes($id)
    {
        {
            // Ambil data resep berdasarkan ID
            $recipe = DB::table('recipes')
                ->where('id_recipe', $id)
                ->first();
    
            if (!$recipe) {
                abort(404);
            }
    
            // Ambil data pengguna yang membuat resep
            $user = DB::table('users')
                ->where('id', $recipe->id_user)
                ->first();
    
            // Ambil komentar terkait dengan join ke tabel users
            $comments = DB::table('comments')
                ->join('users', 'comments.id_user', '=', 'users.id')
                ->where('comments.id_recipe', $id)
                ->select('comments.*', 'users.name', 'users.image')
                ->get();
    
            // Cek apakah resep sudah dikoleksi oleh pengguna saat ini
            $isCollected = Collection::where('id_recipe', $id)
                ->where('id_user', Auth::id())
                ->exists();
    
            // Kirim data ke view
            return view('showRecipe', compact('recipe', 'user', 'comments', 'isCollected'));
        }
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

    public function search(Request $request)
    {
        $search = $request->input('search');

        $recipes = Recipe::where('name_recipe', 'like', '%' . $search . '%')->get();

        return view('pencarian', compact('recipes'));
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

    public function displayRecipe($id)
    {
        $recipe = Recipe::where('id_recipe', $id)->firstOrFail();
        $comments = $recipe->comments()->latest()->get(); // Ambil komentar berdasarkan resep

        return view('showRecipe', compact('recipe', 'comments'));
    }


}
