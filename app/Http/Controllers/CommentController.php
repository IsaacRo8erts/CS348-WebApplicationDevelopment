<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() 
    {
        //return view('menu.index')->with('menu', Menu::all());

        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);

    }

    public function create() 
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'post_id' => 'required|integer',
            'comment' => 'required|max:255',

        ]);

        $comment1 = new Comment;
        $comment1 -> user_id = $validatedData['user_id'];
        $comment1 -> post_id = $validatedData['post_id'];
        $comment1 -> comment = $validatedData['comment'];
        $comment1 -> save();

        session()->flash('message', 'Comment was added.');
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
        $comment = Comment::findOrFail($id);
        return view('comments.show', ['comment' => $comment]);
    }
}
