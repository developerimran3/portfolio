<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class BackendController extends Controller
{
    public function index()
    {
        $user = Student::count();
        $post = Post::count();
        return view("backend.dashboard.index", compact("post", "user"));
    }
}
