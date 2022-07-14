<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ourteamcontroller extends Controller
{
    public function index()
    {

        $list = Post::where('type','blog')->latest()->take(3)->get();
        $list2 = Post::where('type','job')->latest()->get();
        return view('public.ourteam', compact(['list','list2']));
    }
}
