<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.home', [
            'posts' => Post::get()
        ]);
    }

    public function show($id)
    {
        return view('posts.single', [
            'post' => Post::where('id', $id)->first()
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('home');
    }

    public function edit($id)
    {
        return view('posts.update', [
            'post' => Post::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::where('id', $request->id)->first();

        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('single', $post->id);
    }

    public function destroy($id)    
    {
        $post = Post::where('id', $id)->first();

        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('home');
    }
}
