<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class NotAuthenticatedRoutes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentRouteName = $request->route()->getName();
        $allowedNotAuthRoutes = [
            "home",
            "switchmode",
            "darkmode",
            "lightmode",
            "language",
            "login",
            "logout",
            "register",
        ];

        if(in_array($currentRouteName, $allowedNotAuthRoutes))
            return $next($request);

        if(Auth::guest())
            return redirect()->route('home');

        return $next($request);
    }
}
