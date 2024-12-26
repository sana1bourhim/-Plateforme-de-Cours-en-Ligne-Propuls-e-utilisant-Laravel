<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CheckProfessor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
     /*public function handle($request, Closure $next)
     {
         if (auth()->user() && DB::table('professeurs')->where('user_id', auth()->user()->id)->exists()) {
             return $next($request);
         }
     
         return redirect('/');
     }*/
     public function handle($request, Closure $next)
{
    if (!auth()->user() || !DB::table('professeurs')->where('user_id', auth()->user()->id)->exists()) {
        return redirect('/homestudent');
    }

    return $next($request);
}
}
