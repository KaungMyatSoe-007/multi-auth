<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->roles[0]->name == 'Manager'){
                return redirect('admin/managers');
            }
            if(Auth::user()->roles[0]->name == 'Supervisor'){
                return redirect('admin/supervisors');
            }
            if(Auth::user()->roles[0]->name == 'Staff'){
                return redirect('admin/staffs');
            }
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
