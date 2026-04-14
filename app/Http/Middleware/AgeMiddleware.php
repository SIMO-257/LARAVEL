<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->input('age');
        if($age !== null && $age < 21) {
            abort(404);
        }

        return $next($request);
    }
}
