<?php

namespace App\Http\Middleware;

use Closure;
use App\Redis;

class JsonWebToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $token  = $request->header('token','');
        if (!$this->_checkValidToken($token)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Token',
            ], 401);
        }

        return $next($request);
    }

    private function _checkValidToken($token){
        $user = Redis::get($token);

        return !(is_null($user));
    }
}
