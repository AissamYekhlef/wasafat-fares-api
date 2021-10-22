<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if( ! in_array( Auth::user()->email, ['oussama@mobidal.com', 'youcef@mobidal.com', 'aissam@mobidal.com'] ) ){
            return redirect('home')->with('error','You have not admin access');
        }

        return $next($request);
    }
}
