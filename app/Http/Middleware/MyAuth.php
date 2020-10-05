<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);

        }
        if ($request->session()->previousUrl() != null) {
            $back = $request->session()->previousUrl();
            if ($request->session()->previousUrl() == $request->url()) {
                $back = route('home.index');
            }
            return response(view('propouseauth')
                ->with('back', $back));
        } else {
            return redirect()->route('home.index');

        }

    }
}
