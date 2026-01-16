<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , ...$roles): Response
    {
        // First check: logged in?
    if (!auth()->check()) {
        return redirect()->route('account.create')
            ->with('error', 'Please login to access this page');
    }
    
    // Second check: has correct role?
    if (!in_array(auth()->user()->role, $roles)) {
        return redirect()->route('page.notAllowed')
            ->with('error', 'You do not have permission to access this page');
    }

        return $next($request);
    }
}
