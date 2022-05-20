<?php

namespace Farooq\UnitPicker;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Middleware\Authorize;
use Laravel\Nova\ResolvesFields;

class FieldServiceProvider extends ServiceProvider
{
    use ResolvesFields;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('unit-picker', __DIR__.'/../dist/js/field.js');
            Nova::style('unit-picker', __DIR__.'/../dist/css/field.css');
        });

        $this->app->booted(function () {
            $this->routes();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova' , Authorize::class])
                ->prefix('/nova-vendor/unit-picker')
                ->group(__DIR__ . '/../routes/api.php');
    }
}
