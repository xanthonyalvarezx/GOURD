<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // When accessed via Cloudflare tunnel (or any non-localhost host), use the
        // request's URL for assets so CSS and images load correctly.
        if ($this->app->runningInConsole() === false && $this->app->has('request')) {
            $request = $this->app->make('request');
            $host = $request->getHost();
            if ($host !== 'localhost' && $host !== '127.0.0.1') {
                // Tunnel URLs are HTTPS; use https so assets aren't blocked (mixed content).
                $scheme = str_contains($host, 'trycloudflare.com') ? 'https' : $request->getScheme();
                $this->app['config']['app.url'] = $scheme . '://' . $host;
            }
        }
    }
}
