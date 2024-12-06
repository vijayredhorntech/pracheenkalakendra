<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Menu;

class GlobalMenuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Retrieve all top-level menus with their children
        $menus = Menu::with('children')->whereNull('parent_id')->get();

        // Share the $menus variable with all views
        View::share('menus', $menus);

        return $next($request);
    }
}
