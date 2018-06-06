<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Log;

class SqlLog
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
        DB::enableQueryLog();
        $response = $next($request);
        $queryLog = DB::getQueryLog();
        if($queryLog) {
            Log::debug($queryLog);
        }
        return $response;
    }
}
