<?php

namespace App\Http\Middleware;

use Closure, Role;
use Illuminate\Http\Request;

class VerifyRole
{
    /**
     * Handle an incoming request
     * @param  Request $request
     * @param  Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $forbidden = true;

        foreach ($roles as $role) {
            if ($request->user()->hasRole($role)) {
                $forbidden = false;
                break;
            }
        }

        abort_if($forbidden, 403, 'You don\'t have the required permissions ');

        return $next($request);
    }
}
