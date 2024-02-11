<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->role_id != 2) { // jika bukan admin maka tidak bisa mengakses route
            return redirect()->route('unauthorized'); // Ganti 'unauthorized' dengan rute yang sesuai untuk akses yang tidak diizinkan
        }
        return $next($request);
    }
}
