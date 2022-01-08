<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {

        $user = Auth::user()->is_admin;

        if ( $role == 'admin' && !$user || $role == 'user' && $user ) {
            abort(403);
        }

        return $next($request);
    }
}
