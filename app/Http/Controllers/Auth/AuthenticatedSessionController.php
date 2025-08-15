<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // 🔐 Get the logged-in user's role
        $role = Auth::user()->role;

        // ✅ Redirect according to the role
        switch ($role) {
            case 'admin':
                return redirect()->intended('/admin/dashboard');

            case 'seller':
                return redirect()->intended('/seller/dashboard');

            case 'buyer':
                return redirect()->intended('/buyer/home');

            case 'investor':
                return redirect()->intended('/admin/dashboard');

            case 'logistic':
                return redirect()->intended('/logistic/portal');

            default:
                return redirect()->intended('/'); // fallback route
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
{
    // Store current path for potential redirect back
    $path = $request->path();
    
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Special handling for logout from admin pages
    if (str_starts_with($path, 'admin')) {
        return redirect('/login')->with('status', 'Admin logged out successfully');
    }

    return redirect('/');
}
    
}
