<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check apakah usernya authenticated dan is an admin
        if (Auth::check()) {
            if (Auth::user()->utype === 'ADM') {
                // Jika user adalah admin, lanjutkan ke request berikutnya
                return $next($request);
            } else {
                // Jika user bukan admin, redirect ke halaman home
                // session flush untuk menghapus data session
                Session::flush();

                // Redirect ke halaman login
                return redirect()->route('login');
            }
        } else{
            return redirect()->route('login');
        }
    }
}
