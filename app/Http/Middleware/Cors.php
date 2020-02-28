<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        //ALLOW OPTIONS METHOD
        $headers = [
            'Access-Control-Allow-Origin' => 'http://localhost:8081',
            'Access-Control-Allow-Methods' => 'POST,GET,OPTIONS,PUT,DELETE',
            "X-Requested-With"=> "XMLHttpRequest",
            'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin, Authorization,X-Requested-With',
        ];
        if ($request->getMethod() == "OPTIONS"){
            //The client-side application can set only headers allowed in Access-Control-Allow-Headers
            return response()->json('OK',200,$headers);
        }
        $response = $next($request);
        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }
        return $response;

    }
}
