<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class PostController extends Controller
{
    public function create(Request $request) {
        $userName = \Auth::user()['name'];
        $title = "$userName, fill all fields to make new post";
        $tags = Tag::get();
        return view('create-post', compact('title', 'tags'));
    }
}
