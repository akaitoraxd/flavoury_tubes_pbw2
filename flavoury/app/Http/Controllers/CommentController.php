<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Collection;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'id_recipe' => 'required|exists:recipes,id_recipe',
            'comment' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Simpan komentar ke database
        $comment = Comment::create([
            'id_recipe' => $request->id_recipe,
            'id_user' => auth()->id(),
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        // Hitung rata-rata rating baru
        $averageRating = Comment::where('id_recipe', $request->id_recipe)
            ->avg('rating');

        // Update rating di tabel recipes
        $recipe = Recipe::find($request->id_recipe);
        $recipe->rating = $averageRating;
        $recipe->save();

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommentRequest $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        //
    }
}
