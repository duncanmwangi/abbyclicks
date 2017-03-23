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
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = auth()->user();
        if($user->user_type != strtoupper($role)){
            return redirect()->route('unauthorized')->with('error', 'Sorry, You are not allowed to access the requested resource.');
        }
        return $next($request);
    }
}
