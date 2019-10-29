<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->role == 2) {
                return $next($request);
            }
            return abort(404);
        }
        return redirect(route('login'));
    }
}
