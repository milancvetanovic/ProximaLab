<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfOperator
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
        if (!auth()->user()->operator) {
            return redirect('/verifications')->withErrors('You do not have permission to access this page.');
        }
        return $next($request);
    }
}
