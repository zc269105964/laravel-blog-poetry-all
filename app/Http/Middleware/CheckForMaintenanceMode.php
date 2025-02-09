<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        'http://blog.ds520.love/admin',
        'http://blog.ds520.love/admin/*',
        'http://ds520.love/admin',
        'http://ds520.love/admin/*'
    ];
}
