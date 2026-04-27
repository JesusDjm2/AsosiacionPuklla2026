<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = $request->user();

        if (! $user) {
            abort(403);
        }

        if ($user->isAdmin()) {
            return $next($request);
        }

        $expected = UserRole::tryFrom($role);

        if (! $expected || $user->role !== $expected) {
            abort(403);
        }

        return $next($request);
    }
}
