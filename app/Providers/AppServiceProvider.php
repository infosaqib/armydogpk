<?php

namespace App\Providers;

use App\Services\ServiceLocations;
use Illuminate\Support\Facades\View;
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
    public function boot(ServiceLocations $locations): void
    {

        // Share $provinces specifically with the header partial
        View::composer('layouts.partials.header', function ($view) use ($locations) {
            $view->with('provinces', $locations->provinces());
        });

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