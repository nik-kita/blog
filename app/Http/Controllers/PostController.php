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
        $post->user_id = Auth::id();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        $post->tags()->attach($request->input('tags'));
        return view('save-post', [
            'post' => $post
        ]);
    }

    public function show() {
        return view('show', [
            'posts' => Post::get()
        ]);
    }

    public function singleShow($id) {
        return view('show-post', [
            'post' => Post::findOrFail($id),
        ]);
    }


    public function edit($id) {
        $post = Post::find($id);
        return view('edit-post', [
            'post' => $post,
        ]);
    }

    public function update(Request $request) {
        Post::find($request->input('postId'))
            ->update([
                'title' => $request->input('title'),
                'body' => $request->input('body')
            ]);
        Post::find($request->input('postId'))->tags()->sync($request->input('tags'));
        return view('show-post', ['post' => Post::find($request->input('id'))]);
    }

    public function delete($id) {
        Post::find($id)->delete();
        return view('show', ['posts' => Post::get()]);
    }


}
