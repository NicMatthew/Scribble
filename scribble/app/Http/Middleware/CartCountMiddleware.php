<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CartCountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = Auth::id();
        $totalUniqueItemsInCart = 0;

        if ($user_id) {
            $totalUniqueItemsInCart = DB::table('cart_details')
                ->where('UserID', $user_id)
                ->count('ProductID');
        }

        // Mengirimkan data ke view
        view()->share('totalUniqueItemsInCart', $totalUniqueItemsInCart);

        return $next($request);
    }
}
