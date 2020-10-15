<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;

/**
 * Class EnsureRequestIsJson
 * @package App\Http\Middleware
 */
class EnsureRequestIsJson
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, $next)
    {
        if (!$request->isJson()) {
            throw new NotAcceptableHttpException();
        }

        return $next($request);
    }
}
