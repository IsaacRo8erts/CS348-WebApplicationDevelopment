<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {
        //return view('menu.index')->with('menu', Menu::all());

        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);

    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ]);

        $post1 = new Post;
        $post1 -> user_id = $validatedData['user_id'];
        $post1 -> title = $validatedData['title'];
        $post1 -> content = $validatedData['content'];
        $post1 -> save();

        session()->flash('message', 'Post was created.');
        return redirect()->route('posts.index');
        
    }

    public function updateview($id) 
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ]);

        $post = Post::find($request['post_id']);
        $post->update(['title' => $validatedData['title']]);
        $post->update(['content' => $validatedData['content']]);

        session()->flash('message', 'Post was edited.');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }
}
