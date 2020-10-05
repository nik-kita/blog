<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(Request $request) {
        $userName = \Auth::user()['name'];
        $title = "$userName, fill all fields to make new post";
        $tags = Tag::get();
        return view('create-post', compact('title', 'tags'));
    }

    public function save(Request $request) {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = Auth::id();
        $post->save();
        $post->tags()->attach($request->tags);
    }
}