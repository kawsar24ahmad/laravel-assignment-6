<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function showPost()  {
        $posts = Storage::json('blog.json');
        // dd($posts);
        return view('blog', compact('posts'));
    }
}
