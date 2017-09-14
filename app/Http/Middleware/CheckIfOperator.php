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
        if (!auth()->check() or auth()->user()->operator == 0) {
            return redirect('login');
        }
        return $next($request);
    }
}
