<?php

namespace LaravelEnso\MeiliSearch\Http\Middleware;

use Closure;
use LaravelEnso\MeiliSearch\Models\Settings;

class MeiliSearch
{
    public function handle($request, Closure $next)
    {
        Settings::initialize();

        return $next($request);
    }
}
