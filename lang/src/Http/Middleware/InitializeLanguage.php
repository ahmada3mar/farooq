<?php

namespace Digitalcloud\MultilingualNova\Http\Middleware;

use Laravel\Nova\Nova;

class InitializeLanguage
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        if (session()->has('locale')){
            $locale = session()->get('locale') ;
            app()->setLocale($locale);
            if($locale == 'ar'){
                Nova::style('nova-volve-rtl', __DIR__ . '/../../../css/theme.css');
            }
        }
        return $next($request);
    }
}
