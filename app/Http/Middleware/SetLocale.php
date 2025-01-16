<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale');

        if (in_array($locale, ['en', 'fr', 'th'])) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('fr'); // Valeur par défaut
        }

        return $next($request);
    }
}