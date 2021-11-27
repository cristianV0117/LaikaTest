<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Exceptions\ApiException;

class ApiMiddleware
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
        if (empty($request->header('authorization'))) {
            throw new ApiException("No autorizado", 400);
        }

        if ($request->header('authorization') != $_ENV['API_KEY_LAIKA']) {
            throw new ApiException("No autorizado", 401);
        }

        return $next($request);
    }
}
