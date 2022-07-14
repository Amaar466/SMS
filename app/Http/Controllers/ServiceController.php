<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ServiceController extends Controller
{
    public function index()
    {
        $list = Post::where('type','blog')->latest()->take(3)->get();
        return view('public.service', compact('list'));
    }
}
