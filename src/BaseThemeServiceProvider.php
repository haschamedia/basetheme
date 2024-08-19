<?php

namespace BaseTheme;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BaseThemeServiceProvider extends ServiceProvider
{
    public array $singletons = [];

    public function register(): void
    {}
    
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../dist/basetheme/css' => resource_path('basetheme/css'),
            __DIR__.'/../dist/basetheme/js' => resource_path('basetheme/js'),
            __DIR__.'/../dist/basetheme/assets' => resource_path('basetheme/assets'),
        ], 'basetheme-assets');

        $this->mergeConfigFrom(
            __DIR__.'/../config/basetheme.php', 'basetheme'
        );
        
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'base');

        Blade::componentNamespace('BaseTheme\\View\\Components\Modal', 'livemodal');
    }
}
