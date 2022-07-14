<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {

        $list = Post::where('type','blog')->latest()->take(3)->get();
        return view('public.contact', compact('list'));
    }

    public function list()
    {
        $list = Contact::all();
        return view('admin.post.contact', compact('list'));
    }

    public function insert(Request $request)
    {
            $request->validate([
                "subject"=> 'required',       
                "message"=> 'required',       
                "name"=> 'required',       
                "email"=> 'required',       
                "phone"=> 'required'    
            ]); 
        $contact = Contact::create( $request->all());

        return back()->with('success','Our customer support team will contact you soon.');

    }
}
