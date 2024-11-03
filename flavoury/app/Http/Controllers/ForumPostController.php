<?php

namespace App\Http\Controllers;

use App\Models\forum_post;
use App\Http\Requests\Storeforum_postRequest;
use App\Http\Requests\Updateforum_postRequest;

class ForumPostController extends Controller
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
    public function store(Storeforum_postRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(forum_post $forum_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(forum_post $forum_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateforum_postRequest $request, forum_post $forum_post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(forum_post $forum_post)
    {
        //
    }
}
