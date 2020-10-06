<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function addComment($post_id) {
        return view('post-commenting', [
            'post' => Post::find($post_id),
        ]);
    }

    public function saveComment(Request $request) {
        $postId = $request->input('postId');
//        dd(Auth::id());
        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $postId,
            'body' => $request->input('comment')
        ]);
        return view('show-post', [
            'post' => Post::findOrFail($postId),
        ]);
    }
}
