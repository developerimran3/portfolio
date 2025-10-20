<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::latest()->get();
        return view("backend.post.tag.index", compact("tags"));
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
            'tag_name' => 'required',
        ]);

        //slug checking
        $name_check = Tag::where('tag_name', $request->tag_name)->first();
        $tag_slug = $this->makeSlug($request->tag_name);
        if ($name_check) {
            $tag_slug = $this->makeSlug($request->tag_name . " " . rand(1, 100));
        }

        //send Data to DataBase
        Tag::create([
            "tag_name" => $request->tag_name,
            "slug"     =>  $tag_slug,

        ]);
        //return
        return back()->with("success", "Tag Create Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tags  = Tag::find($id);
        return view("backend.post.tag.edit", compact("tags"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /// Validate input
        $request->validate([
            'tag_name' => 'required',
        ]);


        // Generate slug
        $slug = $this->makeSlug($request->tag_name);
        $exists = Tag::where('slug', $slug)->where('id', '!=', $id)->exists();
        if ($exists) {
            $slug = $this->makeSlug($request->tag_name . '-' . rand(1, 100));
        }
        // Update fields
        Tag::where('id', $id)->update([
            'tag_name' => $request->tag_name,
            'slug'     => $slug,
        ]);

        return redirect()->route('tag.index')->with('success', 'Tag updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
