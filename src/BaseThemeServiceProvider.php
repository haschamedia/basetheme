<?php

namespace BaseTheme;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BaseThemeServiceProvider extends ServiceProvider
{
    public array $singletons = [];

    public function register(): void
    {
        //
    }
    
    public function boot(): void
    {
        /**
         * macro media
         * 
         */
        Vite::macro('images', fn (string $asset) => $this->asset("resources/images/{$asset}"));
        
        /**
         * config to publish
         * 
         */
        $this->publishes([
            __DIR__.'/../config/basetheme.php' => config_path('basetheme.php'),
        ], 'basetheme-config');

        /**
         * config to join
         * 
         */
        $this->mergeConfigFrom(
            __DIR__.'/../config/basetheme.php', 'basetheme'
        );
        
        /**
         * default views
         * 
         */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'base');

        /**
         * set Components
         * 
         */
        Blade::componentNamespace('BaseTheme\\View\\Components\Modal', 'livemodal');
    }
}
