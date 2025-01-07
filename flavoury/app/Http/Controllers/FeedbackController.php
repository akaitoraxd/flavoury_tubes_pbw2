<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Models\feedback;
use App\Http\Requests\StorefeedbackRequest;
use App\Http\Requests\UpdatefeedbackRequest;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listFeedback = feedback::all();
        return view('feedbackPage', compact('listFeedback'));
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
        // Validasi input
        $request->validate([
            'feedback' => 'required|string|max:500',
        ]);

        Feedback::create([
            'id_user' => auth()->id(),
            'feedback' => $request->input('feedback'),
            'rating' => (1),
            'date' => now(),  
        ]);

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefeedbackRequest $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feedback $feedback)
    {
        //
    }

    
}
