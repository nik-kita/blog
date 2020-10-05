<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request) {
        $userName = \Auth::user()['name'];
        $request->session()->get('');
        return view('create-post')->with('title', "$userName, fill all fields to make new post");
    }
}
