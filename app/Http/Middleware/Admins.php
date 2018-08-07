<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class Admins
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
        $user = \Auth::user();
        if (!$user->isAdmin == 1){
            return redirect()->route('product.index');
        }
        return $next($request);
    }
}
