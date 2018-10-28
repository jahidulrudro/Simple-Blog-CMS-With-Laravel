<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show(Category $catagory)
    {
        $categories = Category::latest()->get();
        $posts = Post::where('category_id', request('id'))->get();

        return view('categories.show', compact('posts', 'categories'));
    }
}
