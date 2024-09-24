<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login dan apakah role-nya admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Jika admin, lanjutkan ke permintaan berikutnya
        }

        // Jika bukan admin, redirect ke halaman lain (misalnya dashboard)
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
