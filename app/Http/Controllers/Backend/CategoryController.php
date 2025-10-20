<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view("backend.post.category.index", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        //slug checking
        $name_check = Category::where('category_name', $request->category_name)->first();
        $product_slug = $this->makeSlug($request->category_name);
        if ($name_check) {
            $product_slug = $this->makeSlug($request->category_name . " " . rand(1, 100));
        }
        //photo upload
        $photo = $this->fileUpload($request->file("photo"), "media/category/");
        //send Data to DataBase
        category::create([
            "category_name" => $request->category_name,
            "slug"          =>  $product_slug,
            "photo"         => $photo,
        ]);
        //return
        return back()->with("success", "Category Create Successfully!");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories  = Category::find($id);
        return view("backend.post.category.edit", compact("categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate input
        $request->validate([
            'category_name' => 'required',
        ]);

        // Find category
        $category = Category::find($id);
        if (!$category) {
            return back()->with('error', 'Category not found!');
        }

        // Generate slug
        $slug = $this->makeSlug($request->category_name);
        $exists = Category::where('slug', $slug)->where('id', '!=', $id)->exists();
        if ($exists) {
            $slug = $this->makeSlug($request->category_name . '-' . rand(1, 100));
        }

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($category->photo && file_exists(public_path('media/category/' . $category->photo))) {
                unlink(public_path('media/category/' . $category->photo));
            }

            // Upload new photo (assuming you have a fileUpload() helper)
            $photo = $this->fileUpload($request->file('photo'), 'media/category/');
            $category->photo = $photo;
        }

        // Update fields
        $category->category_name = $request->category_name;
        $category->slug = $slug;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the category by ID
        $category = Category::find($id);
        // Check if category exists
        if (!$category) {
            return back()->with("error", "Category Not Found");
        }
        // Delete photo if exists
        if ($category->photo && file_exists(public_path("media/category/" . $category->photo))) {
            unlink(public_path("media/category/" . $category->photo));
        }
        // Delete the category record
        $category->delete();

        return back()->with("success", "Category Deleted Successfully");
    }
}
