<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AboutController extends Controller
{
    public function index()
    { 

        $list = Post::where('type','blog')->latest()->take(3)->get();
        return view('public.about', compact('list'));
    }
}
