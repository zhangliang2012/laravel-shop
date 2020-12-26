<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BenchMark
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
        $time = microtime(true);
        $response = $next($request);
        var_dump(microtime(true) - $time);

        return $response;
    }
}
