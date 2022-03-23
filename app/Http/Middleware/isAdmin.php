<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // if(auth()->check() && auth()->user()->is_admin == 1)
        if(auth()->check() && (Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2))
        {

            return $next($request);

        }

        // elseif(auth()->check() && auth()->user()->is_admin != 1)
        elseif(auth()->check() && (Auth::user()->is_admin != 1 || Auth::user()->is_admin != 2))
        {
            return redirect('login')->with('failed', 'Anda Tidak Punya Wewenang Sebagai Admin');
        }

        elseif(!auth()->check())
        {
            return redirect('login');
        }
        // else {
        //     return redirect('login')->with('failed', 'Anda Tidak Punya Wewenang Sebagai Admin');
        // }
            // return redirect('login')->with('failed', 'Anda Tidak Punya Wewenang Sebagai Admin');
    }
}
