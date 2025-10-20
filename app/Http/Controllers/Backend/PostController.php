<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('galleries')->get();
        return view("backend.post.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view("backend.post.create", compact("categories", "tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        //slug checking
        $name_check = Post::where('title', $request->title)->first();
        $title_slug = $this->makeSlug($request->title);
        if ($name_check) {
            $title_slug = $this->makeSlug($request->title . " " . rand(1, 100));
        }

        //send Data to DataBase
        $post = Post::create([
            "title"     => $request->title,
            "slug"      =>  $title_slug,
            "desc"      =>  $request->desc,
        ]);

        //gallery upload 
        $photo = $this->fileUpload($request->file('photo'), 'media/post/');

        Gallery::create([
            "post_id"    => $post->id,
            "file_name"  => $photo,
        ]);

        //category
        $post->categories()->attach($request->category);
        // //tag
        $post->tags()->attach($request->tags);


        return redirect()->route('post.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::find($id);
        return view('backend.post.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::with('galleries')->find($id);

        if (!$post) {
            return back()->with('error', 'Post not found');
        }
        // Delete related image if exists
        $filePath = public_path('media/post/' . ($post->galleries->file_name ?? null));

        if (!empty($post->galleries) && file_exists($filePath)) {
            unlink($filePath);
            $post->galleries->delete(); // optional: delete gallery record too
        }
        $post->delete();
        return back()->with('success', 'Post Deleted Successfully');
    }
}
