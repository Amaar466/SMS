<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list = Post::where('type','blog')->latest()->take(3)->get();
        return view('public.index', compact('list'));
    }

    public function blogs()
    {
        $list = Post::where('type','blog')->latest()->get();
        return view('public.blogs', compact('list'));
    }
}
