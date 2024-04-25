<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Enums\Role;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
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
        $user = $request->user();

        if (!$user) {
            return $next($request); // If there's no user, proceed normally
        }

        if ($user->role === Role::Admin) {
            return redirect()->route('dashboard'); // Admins are redirected to the dashboard
        }

        // All others are redirected to the homepage
        return redirect()->route('homepage');

        
    }
}

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        // Check the user's role
        if ($user->role->value === (int) $role) {
            return $next($request);
        }

        // If not the correct role, deny access
        return response()->json(['message' => 'Access Denied'], 403);
    }
}