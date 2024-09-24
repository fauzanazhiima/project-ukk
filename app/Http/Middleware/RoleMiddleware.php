<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Mengecek apakah user terautentikasi dan memiliki role yang sesuai
        if (auth()->check() && auth()->user()->role === $role) {
            return $next($request);
        }

        return redirect('/'); // Jika bukan role yang diizinkan, redirect ke halaman lain
    }
}
