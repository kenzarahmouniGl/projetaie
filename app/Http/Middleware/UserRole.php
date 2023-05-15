<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $userRole = $request->user()->role;

        if (!in_array($userRole, $roles)) {
            abort(403, 'Espace non autorisé!!');
        }

        return $next($request);
    }
}

