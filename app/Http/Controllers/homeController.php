<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function showData()  {
        $data = Storage::json('about.json');
        return view('home', compact('data'));
    }
}
