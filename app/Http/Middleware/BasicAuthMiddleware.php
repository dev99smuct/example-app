<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BasicAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $username = 'upload-admin';
        $password = 'Master#2024';

        if ($request->getUser() != $username || $request->getPassword() != $password) {
            $headers = ['WWW-Authenticate' => 'Basic'];
            return response('Invalid credentials.', 401, $headers);
        }

        return $next($request);
    }
}
