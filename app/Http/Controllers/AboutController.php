<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function showAboutData()  {
        $aboutData = Storage::json('about.json');
        return view('about', compact('aboutData'));
    }
}
