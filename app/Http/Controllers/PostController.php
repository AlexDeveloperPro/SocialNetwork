<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function index(Request $request)
    // {
    //     // if (&request->search) {
    //     //     $posts = Post::join('users', 'author_id', '=','users.id')
    //     //     ->where('title', 'like', '%'.request->search.'%')
    //     // }

    //     // $posts = Post::join('users', 'author_id', '=','users.id')
    //     // ->orderBy('posts.created_at', 'desc')
    //     // ->paginate(4);
    //     return view('posts.index', compact('posts'));
    // }
    public function index()
    {
        // $posts = Post::all;
        // return view('posts.index', compact('posts'));
        $posts = Post::all();
        return view('posts.index', compact('posts')); 
    } 
}
