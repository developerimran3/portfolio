<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index()
    {
        $post = Post::count();
        return view("backend.dashboard.index", compact("post"));
    }
}
