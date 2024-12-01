<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Http\Requests\StorecollectionRequest;
use App\Http\Requests\UpdatecollectionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_recipe' => 'required|exists:recipes,id_recipe',
        ]);

        // Cek apakah resep sudah ada di koleksi user
        $existingCollection = Collection::where('id_recipe', $request->id_recipe)
            ->where('id_user', Auth::id())
            ->first();

        if ($existingCollection) {
            return redirect()->back()->with('error', 'Recipe sudah ada di koleksi Anda.');
        }

        // Menyimpan koleksi baru
        Collection::create([
            'id_recipe' => $request->id_recipe,
            'id_user' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Recipe ditambahkan ke koleksi Anda.');
    }


    public function destroy($id)
    {
        // Pastikan id yang diterima adalah id_recipe
        $collection = Collection::where('id_recipe', $id)
            ->where('id_user', Auth::id());

        if ($collection) {
            // Hapus data dari collection
            $collection->delete();
            return redirect()->back()->with('success', 'Recipe dihapus dari koleksi Anda.');
        } else {
            return redirect()->back()->with('error', 'collection tidak ditemukan.');
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecollectionRequest $request, collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

}
