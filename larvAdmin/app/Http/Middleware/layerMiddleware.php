<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class layerMiddleware
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
      if(Auth::check()){
        if(Auth::user->role_as=='1'){
            return $next($request);


        }
        else{
            return redirect('/home')
            ->with ('message','access denied! as you are not admin');
        }
        return redirect('/login')
        ->with ('message','please login first');
      }

    }
}
