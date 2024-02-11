<?php

namespace App\Http\Middleware;

use App\Models\UserPermission;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PermissionGarden
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return UserPermission::isHavePermission($request->user()->id, 1) ?  $next($request) : redirect()->route('unauthorized');
    }
}