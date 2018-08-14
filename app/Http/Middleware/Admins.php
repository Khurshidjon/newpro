<?php

namespace App\Http\Middleware;

use App\Comment;
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
        if (\Auth::user() && $user->isAdmin = 1){
            return $next($request);
        }
        return redirect('/');
    }
}
