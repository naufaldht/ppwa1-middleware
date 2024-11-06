<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::check() && Auth::user()->level === 'admin') {
            return $next($request); // Izinkan akses jika levelnya 'admin'
        }

        // Jika bukan 'admin', arahkan pengguna ke halaman beranda
        return redirect('/home');
    }
}
