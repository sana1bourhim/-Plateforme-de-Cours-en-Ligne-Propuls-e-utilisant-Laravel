<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;

use Closure;
use App\Http\Middleware\Auth;
use Illuminate\Http\Request;

class CheckStudent
{

        /**
         * Handle an incoming request.
         *
         * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
         */
        
         public function handle($request, Closure $next)
         {
            if (auth()->user() && !DB::table('professeurs')->where('user_id', auth()->user()->id)->exists()) {
                return $next($request);
            }
            
             return redirect('/');
         }
    


}
