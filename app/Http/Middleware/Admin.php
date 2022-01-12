<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $user = \App\Models\User::where('email', auth()->user()->email)->first();
        // if ($user->id_level !== 1) {
        //     return redirect('/dashboard');
        // }
        if (auth()->check() || auth()->user()->id_level == 1) {
            return $next($request);
         
        }else{
            abort(403);
        }


    }
}
