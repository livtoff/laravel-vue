<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

class GenerateAndSetCspNonce
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (request()->is('telescope*', 'horizon*')) {
            config(['csp.enabled' => false]);

            return $next($request);
        }

        if (config('csp.nonce_enabled')) {
            Vite::useCspNonce();
        }

        return $next($request);
    }
}
