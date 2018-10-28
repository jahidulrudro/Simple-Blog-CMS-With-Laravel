<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index', 'show']);
    // }

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        $categories = Category::all();

        return view('posts.index', compact('posts', 'categories'));
    }

    public function list()
    {
        $posts = Post::latest()->where('author_id', '=', $user->id)->get();

        return view('posts.list', compact('posts'));
    }

    public function show(Post $post)
    {
        $posts = Post::latest()->get();
        $categories = Category::all();
        return view('posts.show', compact('posts','post', 'categories'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/posts')->with('success', 'Post has been created succcessfully!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // dd($post->id);
        // exit();
        $post = Post::findOrFail(request('id'));
        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/posts')->with('success', 'Post has been updated succcessfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'Post has been deleted succcessfully!');
    }
}
