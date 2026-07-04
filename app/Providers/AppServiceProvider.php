<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (!$this->app->runningInConsole()) {
            $host = request()->getHost();

            foreach (config('purifier.settings', []) as $key => $settings) {
                if (!empty($settings['HTML.TargetBlank'])) {
                    config(["purifier.settings.{$key}.URI.Host" => $host]);
                }
            }
        }
    }
}