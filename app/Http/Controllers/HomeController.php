<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $req) {
        $title = "Welcome to Nik's blog!";
        if(Auth::check()) {
            $title = "Welcome back " .
                User::find(Auth::id())->name . "!";
        }
        $p = "Connect to daily simple hack's of people. Share your inspirations with friends! Discover new! Enjoy!";
        return view('home', compact('title', 'p'));
    }
}
