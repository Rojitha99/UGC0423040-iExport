<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
{
    $guards = empty($guards) ? [null] : $guards;

    foreach ($guards as $guard) {
        if (Auth::guard($guard)->check()) {
            // Skip redirection for auth-related routes
            if ($request->routeIs('login', 'register', 'logout', 'password.*')) {
                return $next($request);
            }
            
            // Redirect to appropriate dashboard
            return $this->redirectToDashboard();
        }
    }

    return $next($request);
}

protected function redirectToDashboard()
{
    $role = Auth::user()->role;
    
    switch ($role) {
        case 'admin': return redirect('/admin/dashboard');
        case 'seller': return redirect('/seller/dashboard');
        case 'buyer': return redirect('/buyer/home');
        case 'investor': return redirect('/investor/home');
        case 'logistic': return redirect('/logistic/portal');
        default: return redirect('/');
    }
}
}
