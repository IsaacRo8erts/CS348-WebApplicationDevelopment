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
            'profile_id' => 'required|integer',
            'title' => 'required|max:255',
            'content' => 'required|max:255',

        ]);

        $post1 = new Post;
        $post1 -> profile_id = $validatedData['profile_id'];
        $post1 -> title = $validatedData['title'];
        $post1 -> content = $validatedData['content'];
        $post1 -> save();

        session()->flash('message', 'Post was created.');
        return redirect()->route('posts.index');
        
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
