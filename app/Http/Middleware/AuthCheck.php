<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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
        
        
        
        if(session()->has('loggeduser') )
        {
            if(session('loggeduser')=='admin')
            {
                if($request->path()!='ahome' && $request->path()!='amenu' && $request->path()!='astud' && $request->path()!='aitem')
                {
                    return back();
                }

            }
            else
            {
                if($request->path()!='home' && $request->path()!='menu')
                {
                    return back();
                }

            }
            
        }
        else
        {
            if($request->path()!='/' && $request->path()!='reg')
            {
                return redirect('/')->with ('fail','You must be logged in');
            }

        }
        
        
        
        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
}
