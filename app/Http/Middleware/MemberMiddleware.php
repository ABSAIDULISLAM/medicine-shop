<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (auth()->user()->role_as == 'member') {
                if (auth()->user()->status == 'active') {
                    return $next($request);
                }else{
                    return redirect()->back()->with('error', 'Account is not active');
                }
            } else {
                return redirect()->back()->with('error', 'Access Denied.! As you are not an Member');
            }
        } else {
            return redirect()->back()->with('error', 'Please Login First.');
        }
    }
}
