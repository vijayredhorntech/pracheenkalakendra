<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
       // check if session has user
        if (!session()->has('user')) {
            return redirect()->route('login');
        }
        else{
            return redirect()->route('dashboard');
        }
    }
}
