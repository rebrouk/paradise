<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 12.04.2018
 * Time: 11:18
 */


namespace App\Http\Middleware;
namespace App\Http\Controllers;

namespace Routes;

use App\Http\Controllers\AddController;
use Closure;

class BeforeMiddleware extends AddController
{
    public function handle($request, Closure $next)
    {
        // Perform action
        echo 3242424;
        return $next($request);
    }
}
echo 3242424;
echo 3242424;
echo 3242424;
echo 3242424;
echo 3242424;


