<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $roleName
     * @return mixed
     */
    public function handle($request, Closure $next, $roleName)
    {
        if (! $request->user()->hasRole($roleName))
        {
            return abort(403);
        }

        return $next($request);
    }
}
