<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class SuperAdmin
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
        if (\Auth::user()->hasRole('Superadmin')){
            return $next($request);
        }
        return redirect()->back()->with('message', 'Sizda Superadminlik huquqi yo\'q');
    }
}
