<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->role_id != 1) { // jika bukan user maka tidak bisa mengakses route
            return redirect()->route('admin-dashboard'); // Ganti 'unauthorized' dengan rute yang sesuai untuk akses yang tidak diizinkan
        }
        return $next($request);
    }
}
