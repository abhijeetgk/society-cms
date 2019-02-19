<?php

namespace App\Http\Middleware;

use Closure;

class checkSocietySession
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
        $society_name = session('society_name', '');
        if(!$society_name){
             return redirect()->route('societyIndex')->with('error','Please select society first');
        }
        return $next($request);
    }
}
