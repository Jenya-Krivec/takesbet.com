<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * If the URL starts with a locale (e.g. "/en"), set the locale.
     * If the locale is the same as the default locale, redirect to the URL without the locale.
     * Otherwise, continue with the next middleware in the stack.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = ltrim($request->route()->getPrefix(), '/');
        // If the URL starts with a locale, set the locale.
        if ($locale) {
            App::setLocale($locale);
        }
        // If the locale is the same as the default locale, redirect to the URL without the locale.
        if ($locale === env('APP_LOCALE')) {
            return redirect(ltrim($request->path(), $locale), 301);
        }
        // Otherwise, continue with the next middleware in the stack.
        return $next($request);
    }
}
