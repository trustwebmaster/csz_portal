<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()) {
            if (Auth::user()->role === 'admin') {
                return $next($request);
            } else {
                dd(Auth::user());
                abort(413);
            }
        } else {
            return redirect('/login');
        }
    }
}
