<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
public function handle(Request $request, Closure $next): Response {
if($request->has("age") && $request->age<18)
	return redirect()
        ->back()
        ->with('error', 'Seuls les personnes âgées de plus de 18 ans sont autorisés à effectuer cette action.')
        ->withInput();

return $next($request);
}
}
