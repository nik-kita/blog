<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MySavePost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $request->validate([
            'title' => 'required|max:50|min:3',
            'body' => 'required|min:20'
        ]);
        return $next($request);
    }
}
