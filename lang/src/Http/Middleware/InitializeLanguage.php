<?php

namespace Digitalcloud\MultilingualNova\Http\Middleware;

use DigitalCloud\MultilingualNova\NovaLanguageTool;
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
        if (session()->has('lang')){
            $lang = session()->get('lang') ;
            app()->setLocale($lang);
            if($lang == 'ar'){
                Nova::style('nova-volve-rtl', __DIR__ . '/../../../css/theme.css');
            }
        }
        return $next($request);
    }
}
