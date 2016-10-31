<?php

namespace ejdelmonico\LaravelRSSFeed;

use Illuminate\Support\ServiceProvider;

class LaravelRSSFeedServiceProvider extends ServiceProvider
{
    const VERSION = '1.0.0';

    protected $defer = true;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
                __DIR__.'/../config/feed.php' => config_path('feed.php'),
            ],
            'config'
        );
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/feed.php', 'feed');

        $this->app->bind(
            Feed::class,
            function () {
                $config = config('feed');

                if (! $config) {
                    throw new \RuntimeException(
                        'Configuration not available. Run `php artisan vendor:publish --provider="ejdelmonico\LaravelRSSFeed\LaravelRSSFeedServiceProvider" --tag=config`'
                    );
                }

                return new Feed($config);
            }
        );

        $this->app->alias(Feed::class, 'feed');
    }

    /**
     * Get the services from provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['feed'];
    }
}
