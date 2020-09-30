<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        $title = "Welcome to Nik's blog!";
        if (Auth::check()) {
            $title = "Welcome back " .
                User::find(Auth::id())->name . "!";
        }
        return view('home', compact('title'));
    }
}
