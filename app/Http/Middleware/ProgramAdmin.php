<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class ProgramAdmin
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
        $currentUser = Auth::user();
        if($currentUser->__get('role') != User::PROGRAM_ADMIN_ROLE && $currentUser->__get("role") != User::ADMIN_ROLE)
            return redirect()->to("/404");
        return $next($request);
    }
}
