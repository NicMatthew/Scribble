<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Auth::user()->RoleUser);
        if (Auth::check() && Auth::user()->RoleUser == 1) {
            return redirect()->route("home");
        }

        // abort(403, 'Unauthorized action.');
        return $next($request);
    }
}
