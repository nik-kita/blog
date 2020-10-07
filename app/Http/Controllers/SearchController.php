<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function random() {
        return view('show-post', [
            'post' => Post::inRandomOrder()->first(),
        ]);
    }

    public function search(Request $request) {

        $search = $request->input('search');

        $results = ($request->input('searchBy') == "title") ?
            Post::where('title', 'like', "%$search%")->get() :
            Post::where('title', 'like', "%$search%")->orWhere('body', 'like', "%$search%")->get();

        return view('show', [
            'posts' => $results,
        ]);
    }

    public function searchByTag($tag) {
        return view('show', [
            'posts' => Tag::find($tag)->posts()->get()
        ]);
    }
}
