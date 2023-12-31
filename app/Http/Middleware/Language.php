<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;
class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle( Request $request, Closure $next)
    {
        if (Session()->has("lang_code")) {
            App::setLocale(Session()->get("lang_code"));
        } else {
            session()->put("lang_code", 'fr');
        }
        return $next($request);
    }
}
