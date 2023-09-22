<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Test
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
        if(auth()->check())
        {
            $user = auth()->user()->name;
            \Log::info("{$user} Logged Time");
        }
        else
        {
            \Log::info("Didn't Logged");
        }
        // \Log::info("This middleware is working :". date('H:i:s Y-m-d'));
        return $next($request);
    }
}
