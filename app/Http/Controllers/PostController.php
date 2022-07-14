<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $post = post::all();
        return view('admin.post.index', compact('post'));

    }
    public function create(){
        return view('admin.post.create');
    }

    public function public($slug){
        $list = Post::where('type','blog')->latest()->take(3)->get();
        $b = post::where('slug',$slug)->get()->first();
        if($b == null)
            abort(404);
        return view('public.blog',compact('b','list'));
    }

    public function insert(Request $request)
    {
        dd($request->all());
        $post = new post();
        if($request->hasFile('image'))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        
            $imageName = time().'.'.$request->image->extension();  
        
            $request->image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }
        else
        {
            $post->image = '';
        }
        $post->title = $request->input('title');
        $post->keyword = $request->input('keyword');
        $post->description = $request->input('description');
        $post->slug = Str::slug($request->input('title')) . "-" . Str::random(10);
    
        $post->content = $request->input('content');
        $post->type =  $request->type;
        $post->save();
        return back()->with('success','Blog saved sucessfully.');

    }
    public function edit($id)
  {
      $post = post::find($id);
      return view('admin.post.edit', compact('post'));

  }

  public function update(Request $request, $id)
    {
        $post = post::find($id);

        if($request->hasFile('image'))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        
            $imageName = time().'.'.$request->image->extension();  
        
            $request->image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->keyword = $request->input('keyword');
        $post->description = $request->input('description');
        $post->type =  $request->input('type');
        $post->save();
        
        return back()->with('success','Blog updated sucessfully.');
    }

    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect('admin/blogs');
    }
   
}
