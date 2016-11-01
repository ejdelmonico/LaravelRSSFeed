<?php

namespace ejdelmonico\LaravelRSSFeed;

use Illuminate\Support\ServiceProvider;

class LaravelRSSFeedServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the package events.
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
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/feed.php', 'feed');

        $this->app->singleton(
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
