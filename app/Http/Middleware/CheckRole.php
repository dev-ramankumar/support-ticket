<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $userRole = $request->user()->role;
        if (Auth::check()) {
            if ($userRole && $userRole->count() > 0) {
                $userRole = $userRole->role;
                $checkRole = 0;
                if ($userRole == $role && $role == 'admin') {
                    $checkRole = 1;
                } elseif ($userRole == $role && $role == 'manager') {
                    $checkRole = 1;
                } elseif ($userRole == $role && $role == 'employee') {
                    $checkRole = 1;
                }

                if ($checkRole == 1) {
                    return $next($request);
                } else {
                    return abort(401);
                }
            } else {
                return redirect('login')->with('info', 'You must be logged in authorized user!');
            }
        } else {
            return redirect('login')->with('info', 'You must be logged in authorized user!');
        }
    }

}
